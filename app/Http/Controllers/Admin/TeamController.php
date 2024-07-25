<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use App\Models\Locationitem;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::all();

        return view('admin.auth.team.index',compact('team'));
    }

    public function create()
    {
        return view('admin.auth.team.create');
    }

    public function store(Request $request)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        // dd('h');
        
        $team = new Team();
        $data = $request->only($team->getFillable());

        $request->validate([
            // 'photo' => 'numeric|min:0|max:32767'
            'name'=>'required'
        ]);

        // $statement = DB::select("SHOW TABLE STATUS LIKE 'product'");
        $count = DB::table('team')->count();

        $ai_id =$count+1;
        // dd($ai_id);
        $ext = $request->file('image')->extension();
        $final_name = 'team-'.$ai_id.'.'.$ext;
        $request->file('image')->move(public_path('uploads/'), $final_name);
        $data['image'] = $final_name;

        $team->fill($data)->save();
        return redirect()->route('admin.auth.team.index')->with('success', 'Team Member is added successfully!');
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.auth.team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        // Find the product by its ID
        $team = Team::findOrFail($id);
    
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
        ]);
    
        // Update the product data
        $data = $request->only($team->getFillable());
        
        // If a new image file is uploaded, update the image
         if ($request->hasFile('image')) {
            $path = public_path('uploads/' . $team->image);

            // Check if the file exists before trying to delete it
            if (file_exists($path)) {
                unlink($path);
                }
    
            // Upload the new image file
            $ext = $request->file('image')->extension();
            $final_name = 'team-' . $id . '.' . $ext;
            $request->file('image')->move(public_path('uploads/'), $final_name);
            $data['image'] = $final_name;
        }
    
        // Save the updated product data
        $team->update($data);
    
        // Redirect back with success message
        return redirect()->route('admin.auth.team.index')->with('success', 'Team Member Details is updated successfully!');
    }
    
    public function destroy($id)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        
        $testimonial = Team::findOrFail($id);
        $testimonial->delete();
        return Redirect()->back()->with('success', 'Team Member  deleted successfully!');
    }
}
