<?php

namespace App\Http\Controllers\User;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    public function index(){
        return view('user.auth.packages');
    }

    public function covid(){
        return view('user.auth.covid');
    }
}
