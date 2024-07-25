<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\TestApproved;
use App\Models\Appointment;
use App\Models\Booking;
use App\Models\Bookpackage;
use App\Models\Testbooking;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Mail\PackageApproved;
use App\Mail\PackageRejected;
use App\Mail\TestRejected;


use Illuminate\Support\Facades\Mail;
use DB;

class TestBookingController extends Controller
{
    public function index()
    {
        $testbooking = Testbooking::all();

        return view('admin.auth.testbooking.index',compact('testbooking'));
    }

    // public function create()
    // {
    //     return view('admin.auth.location.create');
    // }

    public function store(Request $request)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        // dd('h');
        
        $book = new Testbooking();
        $data = $request->only($book->getFillable());

        $book->fill($data)->save();
        return redirect()->route('dashboard')->with('success', 'Test Booking is added successfully!You will recieve mail on confirmation');
    }
 
    public function approve($id)
    {
       

        $sample = Testbooking::find($id);     
        // dd($sample);    
            $sample->status = 'approved';
            $sample->save();
            
            Mail::to($sample->email)->send(new TestApproved($sample));
            return redirect()->back()->with('success', 'Test Collection approved and confirmation email sent.');
        
    }
    
    public function reject($id)
    {
        $sample = Testbooking::find($id);
        
        if ($sample) {
            $sample->status = 'rejected';
            $sample->save();
            Mail::to($sample->email)->send(new TestRejected($sample));
            return redirect()->back()->with('success', 'Package Booking Deleted Successfully');
        }

        return redirect()->back()->with('success', 'Package Booking Not Found');
    }
}
