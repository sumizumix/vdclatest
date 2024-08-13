<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Test;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\Rule;
use DB;

class TestController extends Controller
{
    public function index()
    {
        $test = Test::all();

        return view('admin.auth.test.index', compact('test'));
    }

    public function create()
    {
        return view('admin.auth.test.create');
    }

    public function store(Request $request)
    {

        $parameter = implode(",", $request->parameter);

        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        // dd('h');

        $test = new Test();
        $data = $request->only($test->getFillable());
        $data['parameter'] = $parameter;


        $request->validate([
            // 'photo' => 'numeric|min:0|max:32767'
            'name' => 'required',
            'image' => 'nullable|image|required|mimes:jpeg,png,jpg,gif|max:2048',

        ]);

        // $statement = DB::select("SHOW TABLE STATUS LIKE 'product'");
        $count = DB::table('test')->count();

        $ai_id = $count + 1;
        // dd($ai_id);
        $ext = $request->file('image')->extension();
        $final_name = 'test-' . $ai_id . '.' . $ext;
        $request->file('image')->move(public_path('uploads/'), $final_name);
        $data['image'] = $final_name;
        $data['parameter'] = implode(',', $request->input('parameter'));
        $test->fill($data)->save();
        return redirect()->route('admin.auth.test.index')->with('success', 'Test Details  added successfully!');
    }

    public function edit($id)
    {
        $test = Test::findOrFail($id);
        return view('admin.auth.test.edit', compact('test'));
    }

    public function update(Request $request, $id)
    {
        // Find the product by its ID
        $test = Test::findOrFail($id);

        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
        ]);

        // Update the product data
        $data = $request->only($test->getFillable());

        // If a new image file is uploaded, update the image
        if ($request->hasFile('image')) {
            $path = public_path('uploads/' . $test->image);

            // Check if the file exists before trying to delete it
            if (file_exists($path)) {
                unlink($path);
            }

            // Generate a unique filename
            $ext = $request->file('image')->extension();
            $final_name = 'test-' . Str::uuid() . '.' . $ext;

            // Upload the new image file
            $request->file('image')->move(public_path('uploads/'), $final_name);
            $data['image'] = $final_name;
        }

        // Save the updated product data
        $test->update($data);

        // Redirect back with success message
        return redirect()->route('admin.auth.test.index')->with('success', 'Test details updated successfully!');
    }

    public function destroy($id)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }

        $test = Test::findOrFail($id);
        unlink(public_path('uploads/' . $test->image));
        $test->delete();
        return Redirect()->back()->with('success', 'Test  deleted successfully!');
    }
    
}
