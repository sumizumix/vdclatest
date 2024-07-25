<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use App\Models\Callback;
use App\Models\Feedback;
use App\Models\Product;
use App\Models\Test;
use Illuminate\Http\Request;
use DB;

class PatientsController extends Controller
{
    public function patientspage()
    {
        // dd('hi');
        $product = Product::all();
        return view('user.auth.patients.index', compact('product'));
    }
   
    public function testpage(Request $request)
    {
        $test = Test::orderBY('id', 'desc')->paginate()->withQueryString();
        return view('user.auth.patients.testpage', ['test' => $test]);
    } 

    public function feedback()
    {
        return view('user.auth.feedback.feedback');
    }

    public function store(Request $request)
    {
        $feedback = new Feedback();
        $data = $request->only($feedback->getFillable());
        $feedback->fill($data)->save();
        return redirect()->route('user.feedback')->with('success', 'Feedback Successfully Submitted!');
    }

    public function callback(Request $request)
    {
        $callback = new Callback();
        $data = $request->only($callback->getFillable());
        $callback->fill($data)->save();
        return redirect()->route('dashboard')->with('success', 'Callback Request Successfully Submitted!');
    }
}
