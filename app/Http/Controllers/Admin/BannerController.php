<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class BannerController extends Controller
{
    public function index()
    {
        $appointment = Banner::all();

        return view('admin.auth.banner.index',compact('appointment'));
    }

    // public function create()
    // {
    //     return view('admin.auth.location.create');
    // }

    // public function store(Request $request)
    // {
    //     // if(env('PROJECT_MODE') == 0) {
    //     //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
    //     // }
    //     // dd('h');
        
    //     $location = new Locationitem();
    //     $data = $request->only($location->getFillable());

       

       

    //     $location->fill($data)->save();
    //     return redirect()->route('admin.auth.location.index')->with('success', 'Location is added successfully!');
    // }

    // public function edit($id)
    // {
    //     $location = Locationitem::findOrFail($id);
    //     return view('admin.auth.location.edit', compact('location'));
    // }

    // public function update(Request $request, $id)
    // {
    //     // Find the product by its ID
    //     $location = Locationitem::findOrFail($id);
    
    //     // Validate the incoming request data
       
    //     // Update the product data
    //     $data = $request->only($location->getFillable());
        
       
    //     // dd($data);
    //     $location->update($data);
    //     // Redirect back with success message
    //     return redirect()->route('admin.auth.location.index')->with('success', 'Location is updated successfully!');
    // }
    
    // public function destroy($id)
    // {
    //     // if(env('PROJECT_MODE') == 0) {
    //     //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
    //     // }
        
    //     $location = Locationitem::findOrFail($id);
    //     $location->delete();
    //     return Redirect()->back()->with('success', 'Location  deleted successfully!');
    // }
}
