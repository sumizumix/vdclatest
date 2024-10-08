<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Feedback;
use App\Models\Test;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;

use DB;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::all();

        return view('admin.auth.product.index', compact('product'));
    }

    public function create()
    {
        return view('admin.auth.product.create');
    }

    // public function store(Request $request)
    // {


    //     $photo = new Product();
    //     $data = $request->only($photo->getFillable());

    //     $request->validate([
    //         // 'photo' => 'numeric|min:0|max:32767'
    //         'name'=>'required'
    //     ]);

    //     // $statement = DB::select("SHOW TABLE STATUS LIKE 'product'");
    //     $count = DB::table('product')->count();

    //     $ai_id =$count+1;
    //     // dd($ai_id);
    //     $ext = $request->file('image')->extension();
    //     $final_name = 'package-'.$ai_id.'.'.$ext;
    //     $request->file('image')->move(public_path('uploads/'), $final_name);
    //     $data['image'] = $final_name;

    //     $photo->fill($data)->save();
    //     return redirect()->route('admin.product.index')->with('success', 'Package is added successfully!');
    // }

    public function store(Request $request)
    {
        $photo = new Product();
        $data = $request->only($photo->getFillable());

        $request->validate([
            'name' => 'required',
            'parameter' => 'required|array',
            'image' => 'nullable|image|required|mimes:jpeg,png,jpg,gif|max:2048',

        ]);
        $test = implode(",", $request->parameter);
        $data['parameter'] = $test;

        // Count the number of records in the 'product' table to generate a new id
        $count = DB::table('product')->count();
        $ai_id = $count + 1;

        // Handle image upload
        $ext = $request->file('image')->extension();
        $final_name = 'package-' . $ai_id . '.' . $ext;
        $request->file('image')->move(public_path('uploads/'), $final_name);
        $data['image'] = $final_name;



        $photo->fill($data)->save();
        return redirect()->route('admin.product.index')->with('success', 'Package is added successfully!');
    }










    // public function search(Request $request)
    // {
    //     $query = $request->input('s');

    //     // Search for products by name
    //     $product = Product::where('name', 'LIKE', "%{$query}%")->get();

    //     // Pass the search results to the view
    //     return view('user.auth.patients.index', compact('product', 'query'));
    // }
    public function search(Request $request)
    {
        $query = $request->input('s');

        // Search for products by name
        $product = Product::where('name', 'LIKE', "%{$query}%")->get();

        // If the request expects JSON (autocomplete), return JSON
        if ($request->expectsJson()) {
            return response()->json($product);
        }

        // Pass the search results to the view
        return view('user.auth.patients.index', compact('product', 'query'));
    }

    //     public function testsearch(Request $request)
    // {
    //     $query= $request->input('s');

    //     // Search for products by name
    //     $test = Test::where('name', 'LIKE', "%{$query}%")->paginate()->withQueryString();;

    //     // Pass the search results to the view

    //     return view('user.auth.patients.testpage', compact('test', 'query'));
    // }
    public function testsearch(Request $request)
    {
        $query = $request->input('s');

        // Search for tests by name with pagination
        $test = Test::where('name', 'LIKE', "%{$query}%")->paginate()->withQueryString();

        // If the request expects JSON (autocomplete), return JSON
        if ($request->expectsJson()) {
            return response()->json($test->items());
        }

        // Pass the search results to the view
        return view('user.auth.patients.testpage', compact('test', 'query'));
    }


    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.auth.product.edit', compact('product'));
    }

    // public function update(Request $request, $id)
    // {
      
    //     $product = Product::findOrFail($id);

    //     $request->validate([
    //         'name' => 'required',
    //     ]);
    //     $data = $request->only($product->getFillable());
       
    //     if ($request->hasFile('image')) {
    //         $path = public_path('uploads/' . $product->image);
    //         if (file_exists($path)) {
    //             unlink($path);
    //         }
      
    //         $ext = $request->file('image')->extension();
    //         $final_name = 'package-' . $id . '.' . $ext;
    //         $request->file('image')->move(public_path('uploads/'), $final_name);
    //         $data['image'] = $final_name;
    //     }
    //     $data['parameter'] = implode(',', $request->input('parameter'));
     
    //     $product->update($data);

    //     return redirect()->route('admin.product.index')->with('success', 'package is updated successfully!');
    // }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
    
        $request->validate([
            'name' => 'required',
        ]);

        $data = $request->only($product->getFillable());
  
        if ($request->hasFile('image')) {
 
            $path = public_path('uploads/' . $product->image);
    
           
            if (is_file($path) && file_exists($path)) {
                unlink($path);
            }
    
         
            $ext = $request->file('image')->extension();
            $final_name = 'package-' . $id . '.' . $ext;
            $request->file('image')->move(public_path('uploads/'), $final_name);
            $data['image'] = $final_name;
        }
    
     
        $data['parameter'] = implode(',', $request->input('parameter'));
    
      
        $product->update($data);

        return redirect()->route('admin.product.index')->with('success', 'Package is updated successfully!');
    }
    

    public function destroy($id)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }

        $product = Product::findOrFail($id);
        unlink(public_path('uploads/' . $product->image));
        $product->delete();
        return Redirect()->back()->with('success', 'Package  deleted successfully!');
    }
    public function feedbackindex()
    {
        $feedback = Feedback::orderBy('created_at', 'desc')->get();
        return view('admin.auth.feedback.index', compact('feedback'));
    }
    public function contactindex()
    {
        $feedback = Contact::orderBy('created_at', 'desc')->get();
        return view('admin.auth.feedback.contactindex', compact('feedback'));
    }



    

    
}
