<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\center;
use App\Models\Test;
use Illuminate\Http\Request;

class CenterController extends Controller
{
    public function index()
    {
        $locationitem =center::all();

        return view('admin.auth.center.index',compact('locationitem'));
    }

    public function create()
    {
        return view('admin.auth.center.create');
    }

    public function store(Request $request)
    {
      
        
        $location = new center();
        $data = $request->only($location->getFillable());
        $location->fill($data)->save();
        return redirect()->route('admin.auth.center.index')->with('success', 'Center is added successfully!');
    }

    public function edit($id)
    {
        $location = center::findOrFail($id);
        return view('admin.auth.center.edit', compact('location'));
    }

    public function update(Request $request, $id)
    {
        
        $location = center::findOrFail($id);
        $data = $request->only($location->getFillable());
  
        $location->update($data);
       
        return redirect()->route('admin.auth.center.index')->with('success', 'Center is updated successfully!');
    }
    
    public function destroy($id)
    {    
        $location = center::findOrFail($id);
        $location->delete();
        return Redirect()->back()->with('success', 'Center  deleted successfully!');
    }


 
    

}
