<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Department;

use App\Models\Locationitem;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class DepartmentController extends Controller
{
    public function index()
    {
        $department = Department::all();
        return view('admin.auth.department.index',compact('department'));
    }

    public function create()
    {
        return view('admin.auth.department.create');
    }

    public function store(Request $request)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        // dd('h');
        
        $department = new Department();
        $data = $request->only($department->getFillable());

        $request->validate([
            // 'photo' => 'numeric|min:0|max:32767'
            'name'=>'required',
            'image' => 'nullable|image|required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // $statement = DB::select("SHOW TABLE STATUS LIKE 'product'");
        $count = DB::table('department')->count();

        $ai_id =$count+1;
        // dd($ai_id);
        $ext = $request->file('image')->extension();
        $final_name = 'department-'.$ai_id.'.'.$ext;
        $request->file('image')->move(public_path('uploads/'), $final_name);
        $data['image'] = $final_name;

        $department->fill($data)->save();
        return redirect()->route('admin.auth.department.index')->with('success', 'Department is added successfully!');
    }

    public function edit($id)
    {
        $department = Department::findOrFail($id);
        return view('admin.auth.department.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        // Find the product by its ID
        $department = Department::findOrFail($id);
    
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
        ]);
    
        // Update the product data
        $data = $request->only($department->getFillable());
        
        // If a new image file is uploaded, update the image
           if ($request->hasFile('image')) {
            $path = public_path('uploads/' . $department->image);

            // Check if the file exists before trying to delete it
            if (file_exists($path)) {
                unlink($path);
                
            }
    
            // Upload the new image file
            $ext = $request->file('image')->extension();
            $final_name = 'department-' . $id . '.' . $ext;
            $request->file('image')->move(public_path('uploads/'), $final_name);
            $data['image'] = $final_name;
        }
        // Save the updated product data
        $department->update($data);
    
        // Redirect back with success message
        return redirect()->route('admin.auth.department.index')->with('success', 'Department is updated successfully!');
    }
    
    public function destroy($id)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        
        $department = Department::findOrFail($id);
        $department->delete();
        return Redirect()->back()->with('success', 'Department  deleted successfully!');
    }
}
