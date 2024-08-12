<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Locationitem;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonial = Testimonial::all();

        return view('admin.auth.testimonial.index',compact('testimonial'));
    }

    public function create()
    {
        return view('admin.auth.testimonial.create');
    }

    public function store(Request $request)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        // dd('h');

        $testimonial = new Testimonial();
        $data = $request->only($testimonial->getFillable());

        $request->validate([
            // 'photo' => 'numeric|min:0|max:32767'
            'name'=>'required',
            'image' => 'nullable|image|required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // $statement = DB::select("SHOW TABLE STATUS LIKE 'product'");
        $count = DB::table('testimonial')->count();

        $ai_id =$count+1;
        // dd($ai_id);
        $ext = $request->file('image')->extension();
        $final_name = 'testimonial-'.$ai_id.'.'.$ext;
        $request->file('image')->move(public_path('uploads/'), $final_name);
        $data['image'] = $final_name;

        $testimonial->fill($data)->save();
        return redirect()->route('admin.auth.testimonial.index')->with('success', 'Testimonial is added successfully!');
    }

    public function edit($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.auth.testimonial.edit', compact('testimonial'));
    }

    public function update(Request $request, $id)
    {
        // Find the product by its ID
        $testimonial = Testimonial::findOrFail($id);

        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
        ]);

        // Update the product data
        $data = $request->only($testimonial->getFillable());

        // If a new image file is uploaded, update the image
        if ($request->hasFile('image')) {
            $path = public_path('uploads/' . $testimonial->image);

            // Check if the file exists before trying to delete it
            if (file_exists($path)) {
                unlink($path);
            }
            // Upload the new image file
            $ext = $request->file('image')->extension();
            $final_name = 'testimonial-' . $id . '.' . $ext;
            $request->file('image')->move(public_path('uploads/'), $final_name);
            $data['image'] = $final_name;
        }

        // Save the updated product data
        $testimonial->update($data);

        // Redirect back with success message
        return redirect()->route('admin.auth.testimonial.index')->with('success', 'Testimonial is updated successfully!');
    }

    public function destroy($id)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }

        $testimonial = Testimonial::findOrFail($id);
        $testimonial->delete();
        return Redirect()->back()->with('success', 'Testimonial  deleted successfully!');
    }
}
