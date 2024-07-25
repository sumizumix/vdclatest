<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Locationitem;
use App\Models\Testimonial;

use App\Models\Doctor;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class DoctorController extends Controller
{
    public function index()
    {
        $doctor = Doctor::all();

        return view('admin.auth.doctor.index',compact('doctor'));
    }

    public function create()
    {
        return view('admin.auth.doctor.create');
    }

    public function store(Request $request)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        // dd('h');
        
        $doctor = new Doctor();
        $data = $request->only($doctor->getFillable());

        $request->validate([
            // 'photo' => 'numeric|min:0|max:32767'
            'name'=>'required'
        ]);

        // $statement = DB::select("SHOW TABLE STATUS LIKE 'product'");
        $count = DB::table('doctor')->count();

        $ai_id =$count+1;
        // dd($ai_id);
        $ext = $request->file('image')->extension();
        $final_name = 'doctor-'.$ai_id.'.'.$ext;
        $request->file('image')->move(public_path('uploads/'), $final_name);
        $data['image'] = $final_name;

        $doctor->fill($data)->save();
        return redirect()->route('admin.auth.doctor.index')->with('success', 'Doctor is added successfully!');
    }

    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('admin.auth.doctor.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        // Find the product by its ID
        $doctor = Doctor::findOrFail($id);
    
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
        ]);
    
        // Update the product data
        $data = $request->only($doctor->getFillable());
        
        // If a new image file is uploaded, update the image
           if ($request->hasFile('image')) {
            $path = public_path('uploads/' . $doctor->image);

            // Check if the file exists before trying to delete it
            if (file_exists($path)) {
                unlink($path);
            }
            $ext = $request->file('image')->extension();
            $final_name = 'doctor-' . $id . '.' . $ext;
            $request->file('image')->move(public_path('uploads/'), $final_name);
            $data['image'] = $final_name;
        }
    
        // Save the updated product data
        $doctor->update($data);
    
        // Redirect back with success message
        return redirect()->route('admin.auth.doctor.index')->with('success', 'Doctor is updated successfully!');
    }
    
    public function destroy($id)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return Redirect()->back()->with('success', 'Doctor  deleted successfully!');
    }
}
