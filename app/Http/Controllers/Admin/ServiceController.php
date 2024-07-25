<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Team;
use App\Models\Locationitem;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();

        return view('admin.auth.service.index',compact('service'));
    }

    public function create()
    {
        return view('admin.auth.service.create');
    }

    public function store(Request $request)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        // dd('h');
        
        $service = new Service();
        $data = $request->only($service->getFillable());

        $request->validate([
            // 'photo' => 'numeric|min:0|max:32767'
            'name'=>'required'
        ]);

        // $statement = DB::select("SHOW TABLE STATUS LIKE 'product'");
        

        $service->fill($data)->save();
        return redirect()->route('admin.auth.service.index')->with('success', 'Service added successfully!');
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('admin.auth.service.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        // Find the product by its ID
        $service = Service::findOrFail($id);
    
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
        ]);
    
        // Update the product data
        $data = $request->only($service->getFillable());
        
        // If a new image file is uploaded, update the image
        
    
        // Save the updated product data
        $service->update($data);
    
        // Redirect back with success message
        return redirect()->route('admin.auth.service.index')->with('success', 'Service Details  updated successfully!');
    }
    
    public function destroy($id)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        
        $service = Service::findOrFail($id);
        $service->delete();
        return Redirect()->back()->with('success', 'Service  deleted successfully!');
    }
}
