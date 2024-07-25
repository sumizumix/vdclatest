<?php
namespace App\Http\Controllers\user;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Test;
class TestControllers extends Controller
{
    // public function index()
    // {
    //     $test =Test::all();
      
    //     return view('user.auth.doctors.test', compact('test'));
    // }
    public function index(Request $request)
    {
        $test = Test::orderBY('id','desc')->paginate()->withQueryString();
        return view('user.auth.doctors.test', ['test' =>$test]);
    }
    

}
