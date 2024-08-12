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
use Illuminate\Support\Facades\Auth;

class HomeSampleCollectionController extends Controller
{

    // public function store(Request $request)
    // {

    //     $samplecollection = new Samplecollection();
    //     $data = $request->only($samplecollection->getFillable());

    //     $request->validate([

    //         'name'=>'required',
    //         'address'=>'required'
    //     ]);
    //     $samplecollection->fill($data)->save();
    //     return redirect()->route('dashboard')->with('success', 'Sample Collection details added successfully!');
    // }


    public function  locationtracking()
    {

        $booksamplecollection = DB::table('booksamplecollection')
            ->select('booksamplecollection.*', 'users.*', 'booksamplecollection.id as bid')
            ->join('users', 'users.id', '=', 'booksamplecollection.userid')
            ->where('users.id', Auth::id())
            ->get();

        return view('user.auth.patients.locationtracking', compact('booksamplecollection'));
    }


    public function homesamplecollection()
    {

        $test = DB::table('test')->get();
        $pro = DB::table('product')->get();
        $booksamplecollection = DB::table('booksamplecollection')
            ->select('booksamplecollection.*', 'users.*', 'booksamplecollection.id as bid','users.name as usname')
            ->join('users', 'users.id', '=', 'booksamplecollection.userid')
            ->where('users.id', Auth::id())
            ->get();

        return view('user.auth.patients.homesamplecollection', compact('booksamplecollection', 'test', 'pro'));
    }



    public function  previoussample()
    {


        $test = DB::table('test')->get();
        $pro = DB::table('product')->get();
        $booksamplecollection = DB::table('booksamplecollection')
            ->select('booksamplecollection.*', 'users.*', 'booksamplecollection.id as bid','booksamplecollection.name as usname')
            ->join('users', 'users.id', '=', 'booksamplecollection.userid')
            ->where('users.id', Auth::id())
            ->orderBy('booksamplecollection.updated_at', 'desc') 
            ->get();

        return view('user.auth.patients.previoushomecollection', compact('booksamplecollection', 'test', 'pro'));
    }







    public function store(Request $request)
    {

        $samplecollection = new Samplecollection();

        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'age'=>'required'
        ]);
        $userId = Auth::id();
        $data = $request->only($samplecollection->getFillable());
        if($request->package){
            $data['package'] = implode(',', $request->package);
        }
       if($request->test){
        $data['test'] = implode(',', $request->test);
       }
      
        $data['userid'] =  $userId;  // Add the logged-in user's ID to the data array
        // $data['age'] =  $request->age; 
        $samplecollection->fill($data)->save();
        return redirect()->route('dashboard')->with('success', 'Sample Collection details added successfully!');
    }


    public function destroysample($bid)
    {
        DB::table('booksamplecollection')->where('id', $bid)->delete();
        return redirect()->route('cart.homesamplecollection')->with('success', 'Home sample collection is deleted successfully!');
    }


    // public function editsample($bid)
    // {
    //     $location = Samplecollection::findOrFail($bid);
    //     return view('admin.auth.center.edit', compact('location'));
    // }

    // public function updatesample(Request $request, $bid)
    // {

    //     $location = Samplecollection::findOrFail($bid);
    //     $data = $request->only($location->getFillable());

    //     $location->update($data);

    //     return redirect()->route('admin.auth.center.index')->with('success', 'Center is updated successfully!');
    // }

}
