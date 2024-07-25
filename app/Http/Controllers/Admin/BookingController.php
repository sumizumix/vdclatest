<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Booking;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Bookpackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Mail\PackageApproved;
use App\Mail\PackageRejected;

use Illuminate\Support\Facades\Mail;
use DB;

class BookingController extends Controller
{
    public function index()
    {
        $bookpackage = Bookpackage::all();

        return view('admin.auth.booking.index',compact('bookpackage'));
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
        
        $book = new Bookpackage();
        $data = $request->only($book->getFillable());

        $book->fill($data)->save();
        return redirect()->route('dashboard')->with('success', 'Package is added successfully!You will recieve mail on approval');
    }
 
    public function approve($id)
    {
       

        $sample = Bookpackage::find($id);     
        // dd($sample);    
            $sample->status = 'approved';
            $sample->save();
            
            Mail::to($sample->email)->send(new PackageApproved($sample));
            return redirect()->back()->with('success', 'Package Collection approved and confirmation email sent.');
        
    }
    
    public function reject($id)
    {
        $sample = Bookpackage::find($id);
        
        if ($sample) {
            $sample->status = 'rejected';
            $sample->save();
            Mail::to($sample->email)->send(new PackageRejected($sample));
            return redirect()->back()->with('success', 'Package Booking Deleted Successfully');
        }

        return redirect()->back()->with('success', 'Package Booking Not Found');
    }

    
       
    public function cartindex()
    {
   
    $cart = DB::table('cart')
    ->select('product.*','product.name as pname','test.*','users.*','cart.*','users.name as uname','test.name as tname', 'test.price as testprice','product.price as productprice')
    ->leftJoin('product','product.id', '=', 'cart.product_id')
    ->leftJoin('test', 'test.id', '=', 'cart.product_id')
    ->join('users', 'users.id', '=', 'cart.user_id')
    ->orderBy('cart.created_at', 'desc')
    ->get();

    return view('admin.auth.booking.cartindex', compact('cart'));
       
    }
    public function search(Request $request)
    {
        $query = $request->input('query');
        $cart = DB::table('cart')
        ->select('product.*','product.name as pname','test.*','users.*','cart.*','users.name as uname','test.name as tname', 'test.price as testprice','product.price as productprice')
        ->leftJoin('product','product.id', '=', 'cart.product_id')
        ->leftJoin('test', 'test.id', '=', 'cart.product_id')
        ->join('users', 'users.id', '=', 'cart.user_id') 
        ->where('cart.created_at', 'LIKE', "%{$query}%")->get();
        
        // dd($cart);
        // Search for products by name
    
        // If the request expects JSON (autocomplete), return JSON
        if ($request->expectsJson()) {
            return response()->json($cart);
        }
    
        // Pass the search results to the view
        return view('admin.auth.booking.cartindex', compact('cart', 'query'));
        }
    
}
