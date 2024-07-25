<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class ReportController extends Controller
{
    public function index()
    {
        $prescription = Report::all();

        return view('admin.auth.report.index',compact('prescription'));
    }

    public function create()
    {
        return view('admin.auth.report.create');
    }

    public function store(Request $request)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        // dd('h');
        
        $prescription = new Report();
        $data = $request->only($prescription->getFillable());

        $request->validate([
            // 'photo' => 'numeric|min:0|max:32767'
            'name'=>'required'
        ]);

        // $statement = DB::select("SHOW TABLE STATUS LIKE 'product'");
        $count = DB::table('report')->count();

        $ai_id =$count+1;
        // dd($ai_id);
        $ext = $request->file('report')->extension();
        $final_name = 'prescription-'.$ai_id.'.'.$ext;
        $request->file('report')->move(public_path('uploads/'), $final_name);
        $data['report'] = $final_name;

        $prescription->fill($data)->save();
        return redirect()->route('admin.auth.report.index')->with('success', 'Result is added successfully!');
    }

    public function edit($id)
    {
        $prescription = Report::findOrFail($id);
        return view('admin.auth.report.edit', compact('prescription'));
    }

    public function update(Request $request, $id)
    {
        // Find the product by its ID
        $prescription = Report::findOrFail($id);
    
        // Validate the incoming request data
        $request->validate([
            'name' => 'required',
        ]);
    
        // Update the product data
        $data = $request->only($prescription->getFillable());
        
        // If a new image file is uploaded, update the image
        if ($request->hasFile('report')) {
            // Remove the existing image file
            unlink(public_path('uploads/' . $prescription->report));
    
            // Upload the new image file
            $ext = $request->file('report')->extension();
            $final_name = 'prescription-' . $id . '.' . $ext;
            $request->file('report')->move(public_path('uploads/'), $final_name);
            $data['report'] = $final_name;
        }
    // dd($data);
        // Save the updated product data
        $prescription->update($data);
    
        // Redirect back with success message
        return redirect()->route('admin.auth.report.index')->with('success', 'Result is updated successfully!');
    }
    
    public function destroy($id)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        
        $prescription = Report::findOrFail($id);
        unlink(public_path('uploads/'.$prescription->report));
        $prescription->delete();
        return Redirect()->back()->with('success', 'Result Details  deleted successfully!');
    }
    public function search(Request $request)
    {
        // Get the search query from the request
        $query = $request->input('query');
        // Perform the search
        $prescription = Report::where('name', 'like', '%' . $query . '%')
        ->orWhere('phone', 'like', '%' . $query . '%')
        ->orWhere('testdate', 'like', '%' . $query . '%')
        ->orWhere('reportdate', 'like', '%' . $query . '%')
        ->get();
        // $noResults = $prescription->isEmpty();
        // dd($noResults);
        // Pass the search results to the view
        return view('admin.auth.report.index', compact('prescription'));
    }
}
