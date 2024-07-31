<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Locationitem;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class LocationController extends Controller
{
    public function index()
    {
        $locationitem = Locationitem::all();

        return view('admin.auth.location.index', compact('locationitem'));
    }

    public function create()
    {
        return view('admin.auth.location.create');
    }

    public function store(Request $request)
    {

        
        $request->validate([
            'phone' => ['required', 'numeric', 'regex:/^\d{10,}$/'],
        ]);

        $location = new Locationitem();
        $data = $request->only($location->getFillable());
        $location->fill($data)->save();
        return redirect()->route('admin.auth.location.index')->with('success', 'Location is added successfully!');
    }

    public function edit($id)
    {
        $location = Locationitem::findOrFail($id);
        return view('admin.auth.location.edit', compact('location'));
    }

    public function update(Request $request, $id)
    {

        $location = Locationitem::findOrFail($id);
        $data = $request->only($location->getFillable());

        $location->update($data);

        return redirect()->route('admin.auth.location.index')->with('success', 'Location is updated successfully!');
    }

    public function destroy($id)
    {


        $location = Locationitem::findOrFail($id);
        $location->delete();
        return Redirect()->back()->with('success', 'Location  deleted successfully!');
    }







    public function indexhospital()
    {
        $locationitem = hospital::all();

        return view('admin.auth.hospital.index', compact('locationitem'));
    }

    public function createhospital()
    {
        return view('admin.auth.hospital.create');
    }

 
    public function storehospital(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
            'phone' => 'required|digits_between:10,15',
            'image' => 'nullable|image|required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Create a new instance of the Hospital model
        $location = new Hospital();

        // Get all fillable attributes
        $data = $request->only($location->getFillable());

        // Handle the image upload if an image was provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $final_name = 'hospital-' . time() . '.' . $ext;
            $path = $image->move(public_path('uploads'), $final_name);

            if ($path) {
                $data['image'] = $final_name;
            } else {
                return redirect()->route('admin.auth.hospital.index')->with('error', 'Image upload failed!');
            }
        }
        // dd($data);

        // Save the hospital data
        $location->fill($data)->save();

        return redirect()->route('admin.auth.hospital.index')->with('success', 'Hospital is added successfully!');
    }





    public function edithospital($id)
    {
        $location = hospital::findOrFail($id);
        return view('admin.auth.hospital.edit', compact('location'));
    }

  
    public function updatehospital(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
            'phone' => 'required|digits_between:10,15',
            'image' => 'nullable|image|required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Find the hospital record by ID
        $location = Hospital::findOrFail($id);

        // Get all fillable attributes
        $data = $request->only($location->getFillable());

        // Handle the image upload if a new image was provided
        if ($request->hasFile('image')) {
            // Delete the old image if it exists
            if ($location->image && file_exists(public_path('uploads/' . $location->image))) {
                unlink(public_path('uploads/' . $location->image));
            }

            // Store the new image
            $image = $request->file('image');
            $ext = $image->getClientOriginalExtension();
            $final_name = 'hospital-' . time() . '.' . $ext;
            $path = $image->move(public_path('uploads'), $final_name);

            if ($path) {
                $data['image'] = $final_name;
            } else {
                return redirect()->route('admin.auth.hospital.index')->with('error', 'Image upload failed!');
            }
        }

        // Update the hospital data
        $location->update($data);

        return redirect()->route('admin.auth.hospital.index')->with('success', 'Hospital is updated successfully!');
    }


    public function destroyhospital($id)
    {


        $location = hospital::findOrFail($id);
        $location->delete();
        return Redirect()->back()->with('success', 'hospital  deleted successfully!');
    }
}
