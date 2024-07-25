<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Prescription;
use App\Models\Product;
use App\Models\User;
use App\Models\Samplecollection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class PrescriptionController extends Controller
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

    // public function store(Request $request)
    // {
       
        
    //     $prescription = new Prescription();
    //     $data = $request->only($prescription->getFillable());

    //     $request->validate([
        
    //         'name'=>'required'
    //     ]);

       
    //     $count = DB::table('prescription')->count();

    //     $ai_id =$count+1;
    //     $ext = $request->file('prescription')->extension();
    //     $final_name = 'prescription-'.$ai_id.'.'.$ext;
    //     $request->file('prescription')->move(public_path('uploads/'), $final_name);
    //     $data['prescription'] = $final_name;

    //     $prescription->fill($data)->save();
    //     return redirect()->route('dashboard')->with('success', 'Prescription is added successfully!');
    // }

//     public function store(Request $request)
// {
    
//     $request->validate([
//         'name' => 'required',
//         'phone' => 'required',
//         'prescription' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048'
//     ]);

   
//     $existingUser = DB::table('users')->where('phone', $request->phone)->first();

//     if ($existingUser) {
//         return redirect()->back()->with('error', 'The phone number already exists in the users table.');
//     }

    
//     $prescription = new Prescription();
//     $data = $request->only($prescription->getFillable());

//     $count = DB::table('prescription')->count();
//     $ai_id = $count + 1;
//     $ext = $request->file('prescription')->extension();
//     $final_name = 'prescription-' . $ai_id . '.' . $ext;
//     $request->file('prescription')->move(public_path('uploads/'), $final_name);
//     $data['prescription'] = $final_name;

//     $prescription->fill($data)->save();

    
//     $user = new User();
//     $user->name = $request->name;
//     $user->phone = $request->phone;
//     $user->email = $request->phone . '@gamil.com'; 
//     $user->password = bcrypt('default_password');
//     $user->save();

//     return redirect()->route('dashboard')->with('success', 'Prescription is added successfully and user data is stored!');
// }
public function store(Request $request)
{
    // Validate incoming request
    $request->validate([
        'name' => 'required',
        'phone' => 'required',
        'prescription' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048'
    ]);

    // Check if the phone number already exists in the users table
    $existingUser = DB::table('users')->where('phone', $request->phone)->first();

    // Store prescription data
    $prescription = new Prescription();
    $data = $request->only($prescription->getFillable());

    $count = DB::table('prescription')->count(); // Update the table name to plural
    $ai_id = $count + 1;
    $ext = $request->file('prescription')->extension();
    $final_name = 'prescription-' . $ai_id . '.' . $ext;
    $request->file('prescription')->move(public_path('uploads/'), $final_name);
    $data['prescription'] = $final_name;

    $prescription->fill($data)->save();

    // Store user data only if the phone number doesn't already exist
    if (!$existingUser) {
        $user = new User();
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->phone . '@example.com'; // Generate a default email
        $user->password = bcrypt('default_password'); // Set a default password (hashed)
        $user->save();
    }

    return redirect()->route('dashboard')->with('success', 'Prescription is added successfully');
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
