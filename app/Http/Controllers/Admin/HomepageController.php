<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Test;
class HomepageController extends Controller
{
    public function index()
    {
        // $test =Test::all();
        $testCount = DB::table('test')->count();
        $productCount = DB::table('product')->count();
        $departmentCount = DB::table('department')->count();
        $prescriptionCount = DB::table('prescription')->count();
        $teamCount = DB::table('team')->count();
        $testimonial = DB::table('testimonial')->count();
        return view('pages.admindashboard',compact('testCount','productCount','departmentCount','prescriptionCount','teamCount','testimonial'));
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Log the user out
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token
        return route('dashboard'); // Redirect to the homepage or any other page
    }
}
