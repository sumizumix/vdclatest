<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Mail\RegistrationEmailToCustomer;
use App\Models\Register;
use App\Models\User;

use Illuminate\Http\Request;
use Hash;
use DB;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{
    public function index()
    {
        // $g_setting = DB::table('general_settings')->where('id', 1)->first();
    	return view('user.auth.registration');
    }

    public function store(Request $request)
{
    
    
    $data = [
        'name' => $request->name,
        'phone'=>$request->phone,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'role_id' => 1,
        
    ];
    // dd($data);
    Register::create($data);

    return redirect()->back()->with('success', 'Registration successful. Please check your email to verify your registration.');
}


    public function verify()
    {
        $email_from_url = request()->segment(count(request()->segments()));
        $aa = DB::table('customers')->where('email', $email_from_url)->first();

        if(!$aa) {
            return redirect()->route('customer.login');
        }

        $expected_url = url('customer/registration/verify/'.$aa->token.'/'.$aa->email);
        $current_url = url()->current();
        if($expected_url != $current_url) {
            return redirect()->route('customer.login');
        }

        $data['status'] = 'Active';
        $data['token'] = '';
        Customer::where('email',$email_from_url)->update($data);

        return redirect()->route('customer.login')->with('success', 'Registration is completed. You can now login.');
    }

}
