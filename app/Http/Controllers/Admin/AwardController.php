<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Award;

use App\Models\Locationitem;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class AwardController extends Controller
{
    public function index()
    {
        $award = Award::all();

        return view('admin.auth.award.index',compact('award'));
    }

    public function create()
    {
        return view('admin.auth.award.create');
    }

    public function store(Request $request)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        // dd('h');
        
        $award = new Award();
        $data = $request->only($award->getFillable());

        $request->validate([
            // 'photo' => 'numeric|min:0|max:32767'
            'name'=>'required'
        ]);

        
        
        $award->fill($data)->save();
        return redirect()->route('admin.auth.award.index')->with('success', 'Award is added successfully!');
    }

    public function edit($id)
    {
        $award = Award::findOrFail($id);
        return view('admin.auth.award.edit', compact('award'));
    }

    public function update(Request $request, $id)
    {
        // Find the product by its ID
        $award = Award::findOrFail($id);
    
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
        ]);
    
        // Update the product data
        $data = $request->only($award->getFillable());
        
        // If a new image file is uploaded, update the image
        if ($request->hasFile('image')) {
            // Remove the existing image file
            unlink(public_path('uploads/' . $award->image));
    
            // Upload the new image file
            $ext = $request->file('image')->extension();
            $final_name = 'award-' . $id . '.' . $ext;
            $request->file('image')->move(public_path('uploads/'), $final_name);
            $data['image'] = $final_name;
        }
    
        // Save the updated product data
        $award->update($data);
    
        // Redirect back with success message
        return redirect()->route('admin.auth.award.index')->with('success', 'Award Details  Updated Successfully!');
    }
    
    public function destroy($id)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        
        $award = Award::findOrFail($id);
        $award->delete();
        return Redirect()->back()->with('success', 'Award Details  Deleted Successfully!');
    }
}
