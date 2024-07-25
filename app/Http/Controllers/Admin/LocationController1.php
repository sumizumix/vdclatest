<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Locationitem;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class LocationController extends Controller
{
    public function index()
    {
        $locationitem = Locationitem::all();

        return view('admin.auth.location.index',compact('locationitem'));
    }

    public function create()
    {
        return view('admin.auth.location.create');
    }

    public function store(Request $request)
    {
      
        
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
}
