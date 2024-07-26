<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;

use App\Models\Samplecollection;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Mail\SampleApproved;
use App\Mail\SampleRejected;

use Illuminate\Support\Facades\Mail;



use DB;

class AppointmentController extends Controller
{
    public function index()
    {
        $booksamplecollection = Samplecollection::all();


        return view('admin.auth.appointment.index', compact('booksamplecollection'));
    }



    public function updateuploadresult(Request $request, $id)
    {
        $team = Samplecollection::findOrFail($id);

        if ($request->hasFile('image')) {
            // Delete old file if exists
            if ($request->existing) {
                $path = public_path('uploads/' . $request->existing);
                unlink($path);
            }

            // Store new file
            $file = $request->file('image');
            $fileName = 'team-' . $id . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/'), $fileName);
            $team->update(['image' => $fileName]);
        }

        return redirect()->route('admin.auth.appointement.index')->with('success', 'Upload result successfully!');
    }


    public function approve($id)
    {


        $sample = Samplecollection::find($id);
        // dd($sample);    
        $sample->status = 'approved';
        $sample->save();

        Mail::to($sample->email)->send(new SampleApproved($sample));
        return redirect()->back()->with('success', 'Sample Collection approved and confirmation email sent.');
    }

    public function reject($id)
    {
        $sample = Samplecollection::find($id);

        if ($sample) {
            $sample->status = 'rejected';
            $sample->save();
            Mail::to($sample->email)->send(new SampleRejected($sample));

            return redirect()->back()->with('success', 'Sample Collection Deleted Successfully');
        }

        return redirect()->back()->with('success', 'Sample Collection Not Found');
    }
}

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
