<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Samplecollection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;
use Toastr;

class HomeSampleCollectionController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('admin.auth.product.index',compact('product'));
    }

    public function create()
    {
        return view('admin.auth.product.create');
    }

    public function store(Request $request)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        // dd('h');
        
        $samplecollection = new Samplecollection();
        $data = $request->only($samplecollection->getFillable());

        $request->validate([
           
            'name'=>'required',
            'address'=>'required'
        ]);

      

        $samplecollection->fill($data)->save();
        // Toastr::success('Sample Collection details added successfully!');
        return redirect()->route('dashboard')->with('success', 'Sample Collection details added successfully!');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.auth.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        // Find the product by its ID
        $product = Product::findOrFail($id);
    
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
        ]);
    
        // Update the product data
        $data = $request->only($product->getFillable());
        
        // If a new image file is uploaded, update the image
        if ($request->hasFile('image')) {
            // Remove the existing image file
            unlink(public_path('uploads/' . $product->image));
    
            // Upload the new image file
            $ext = $request->file('image')->extension();
            $final_name = 'package-' . $id . '.' . $ext;
            $request->file('image')->move(public_path('uploads/'), $final_name);
            $data['image'] = $final_name;
        }
    
        // Save the updated product data
        $product->update($data);
    
        // Redirect back with success message
        return redirect()->route('admin.product.index')->with('success', 'Product is updated successfully!');
    }
    
    public function destroy($id)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        
        $product = Product::findOrFail($id);
        unlink(public_path('uploads/'.$product->image));
        $product->delete();
        return Redirect()->back()->with('success', 'Package  deleted successfully!');
    }
}
