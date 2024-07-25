<?php

namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class HomeController extends Controller
{
    public function index()
    {
    	$pageaboutitem = DB::table('pageaboutitem')->get();
        $product=DB::table('product')->limit(3)->get();
        $pro=DB::table('product')->get();
        $packages =Product::all();
        $test=DB::table('test')->get();
        $testimonial=DB::table('testimonial')->get();
        // dd($test);
        
        // return view('welcome');
        return view('welcome', compact('pageaboutitem','product','test','testimonial','pro','packages'));

    }
    
    
}
