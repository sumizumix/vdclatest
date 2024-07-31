<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Mail\RegistrationEmailToCustomer;
use App\Models\Register;
use App\Models\UserRegister;
use RealRashid\SweetAlert\Facades\Alert;
use Toastr;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Hash;
use DB;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Toaster;
use Illuminate\Support\Facades\Log;
use Illuminate\Validation\ValidationException;

class UserRegistrationController extends Controller
{
    public function index()
    {
        // $g_setting = DB::table('general_settings')->where('id', 1)->first();
        return view('user.auth.registration');
    }

    public function loginCheck(Request $request)
    {

        $request->validate([
            'phone' => 'required|digits_between:10,15',

        ]);

        $credentials = $request->only('phone');
        $user = User::where('phone', $request->phone)->first();


        if ($user) {
            auth()->login($user);
            $user = Auth::user();
            if ($user->role_id == 2) {
                Toastr::success('Successfully logged in', 'Welcome!');
                // Fetch required data after login
                $pageaboutitem = DB::table('pageaboutitem')->get();
                $product = DB::table('product')->limit(3)->get();
                $pro = DB::table('product')->get();
                $test = DB::table('test')->get();
                $testimonial = DB::table('testimonial')->get();
                $authUser = $user;
                return redirect()->back();
            } else {
                // Failed login attempt
                $authUser = null;
                Toastr::error('Login Unsuccessful', 'Invalid!');
                return redirect()->back();
            }
        } else {
            // Initialize $authUser with null if authentication fails
            $authUser = null;
            // Failed login attempt
            Toastr::error('Login Unsuccessful', 'Invalid phone number!');
            return redirect()->back();
        }
    }

    // UserController.php
    // public function loginCheck(Request $request)
    // {
    //     $phoneNumber = $request->input('loginInput');
    //     $pass = $request->input('loginPass');

    //     // Query the user based on phone number and password
    //     $user = Register::where('phone', $phoneNumber)
    //                     ->where('password', $pass)
    //                     ->first();

    //     if ($user) {
    //         // Attempt to log in the user
    //         if (Auth::attempt(['phone' => $phoneNumber, 'password' => $pass])) {
    //             // Authentication successful
    //             Toastr::success('Successfully logged in', 'Welcome!');
    //             // Fetch required data after login
    //             $pageaboutitem = DB::table('pageaboutitem')->get();
    //             $product = DB::table('product')->limit(3)->get();
    //             $pro = DB::table('product')->get();
    //             $test = DB::table('test')->get();
    //             $testimonial = DB::table('testimonial')->get();
    //             $authUser = Auth::user();
    //             // Return the view with required data
    //             return view('welcome', compact('pageaboutitem', 'product', 'test', 'testimonial', 'pro', 'authUser'));
    //         } else {
    //             // Failed login attempt
    //             Toastr::error('Login Unsuccessful', 'Invalid phone number or password!');
    //             return redirect()->route('dashboard');
    //         }
    //     } else {
    //         // User not found
    //         Toastr::error('Login Unsuccessful', 'Invalid phone number or password!');
    //         return redirect()->route('dashboard');
    //     }
    // }






    // public function store(Request $request)
    // {

    //     $data = [
    //         'name' => $request->uname,
    //         'phone' => $request->uphone,    
    //         'role_id' => 2,
    //     ];
    //     // dd($data);
    //     Register::create($data);

    //     return redirect()->back()->with('success', 'Registration successful. Please check your email to verify your registration.');
    // }
    public function store(Request $request)
    {

        try {
            // Validate input
            $request->validate([
                'uname' => 'required|string',
                'uphone' => 'required|string|unique:users,phone', // Ensure 'phone' is unique in 'users' table
            ], [
                'uphone.unique' => 'The phone number has already been taken.', // Custom error message for unique constraint
            ]);

            // Create data array
            $data = [
                'name' => $request->input('uname'),
                'phone' => $request->input('uphone'),
                'role_id' => 2,
            ];

            // Attempt to create new entry
            Register::create($data);

            return redirect()->back()->with('success', 'Registration successful');
        } catch (ValidationException $e) {
            // Log the validation errors
            Log::error('Validation errors:', $e->errors());

            // Optionally, you can print the validation errors (useful for debugging)


            // Redirect back with errors
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }



    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
