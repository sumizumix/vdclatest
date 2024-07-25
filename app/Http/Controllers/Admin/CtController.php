<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\CtscanApproved;
use App\Mail\CtscanRejected;
use App\Models\Product;
use App\Models\Report;
use App\Models\Prescription;
use App\Models\Ctscan;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use DB;

class CtController extends Controller
{
    public function index()
    {
        $ctscan = Ctscan::all();

        return view('admin.auth.ctscan.index',compact('ctscan'));
    }

    public function create()
    {
        return view('admin.auth.location.create');
    }

    public function store(Request $request)
    {
        // if(env('PROJECT_MODE') == 0) {
        //     return redirect()->back()->with('error', env('PROJECT_NOTIFICATION'));
        // }
        // dd('h');
        
        $Ctscan = new Ctscan();
        $data = $request->only($Ctscan->getFillable());

        $request->validate([
            // 'photo' => 'numeric|min:0|max:32767'
            'patient_name'=>'required'
        ]);

        // $statement = DB::select("SHOW TABLE STATUS LIKE 'product'");
       
       

        $Ctscan->fill($data)->save();
        return redirect()->route('dashboard')->with('success', 'CT Scan appointment is added successfully!');
    }

    public function approve($id)
    {
       

        $ctscan = Ctscan::find($id);     
        // dd($sample);    
            $ctscan->status = 'approved';
            $ctscan->save();
            
            Mail::to($ctscan->email)->send(new CtscanApproved($ctscan));
            return redirect()->back()->with('success', 'Test Collection approved and confirmation email sent.');
        
    }
    public function reject($id)
    {
        $sample = Ctscan::find($id);
        
        if ($sample) {
            $sample->status = 'rejected';
            $sample->save();
            Mail::to($sample->email)->send(new CtscanRejected($sample));
            return redirect()->back()->with('success', 'Package Booking Deleted Successfully');
        }

        return redirect()->back()->with('success', 'Package Booking Not Found');
    }
}
