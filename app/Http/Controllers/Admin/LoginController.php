<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Hash;
use Auth;

class LoginController extends Controller
{
    public function index()
    {
    	return view('admin.auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
    
        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            $user = Auth::user();
            if ($user->role_id == 0) {
                return redirect()->route('admin.auth.viewprescription.index');
            } else {
                // Redirect for users with role_id other than 0
                // For example, you could redirect them to a different dashboard
                return redirect()->route('admin.auth.viewprescription.index');
            }
        } else {
            return redirect()->route('admin.login')->with('error', 'Information is not correct!');
     }}

}