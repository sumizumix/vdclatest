<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Locationitem;
use App\Models\Hospital;
use App\Models\Team;
use App\Models\PageAboutItem;
use DB;

class ContactController extends Controller
{
    public function index()
    {
    	$contact = DB::table('locationitem')->get();
       
        return view('user.auth.contact.index', compact('contact'));

    }
    public function contact()
    {
        $contact =Locationitem::all();
      
        return view('user.auth.doctors.contact', compact('contact'));
    }
//     public function contact(Request $request)
// {
//     $query = $request->input('query');
    
//     if ($query) {
//         $contact = Locationitem::where('place', 'like', '%' . $query . '%')->get();
//     } else {
//         $contact = Locationitem::all();
//     }

//     return view('user.auth.doctors.contact', compact('contact'));
// }
    public function search(Request $request)
    {
        // Get the search query from the request
        $query = $request->input('query');
        // Perform the search
        $location = Locationitem::where('place', 'like', '%' . $query . '%')
       
        ->get();
        // $noResults = $prescription->isEmpty();
        // dd($noResults);
        // Pass the search results to the view
        return view('user.auth.doctors.contact', compact('location'));
    }
    public function about()
    {
    	// $hospital = DB::table('hospital')->get();
        $hospital = hospital::all();
        $team = Team::all();
        $page_about = PageAboutItem::where('id',1)->first();
        return view('user.auth.contact.about', compact('hospital','team','page_about'));
}
    
    
}
