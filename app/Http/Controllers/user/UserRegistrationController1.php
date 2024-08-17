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
            'phone' => 'required',
            '
            ' => 'required'
        ]);

        $credentials = $request->only('phone', 'password');
        if (Auth::attempt($credentials)) {
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
                // Return the view with required data
                // return view('welcome', compact('pageaboutitem', 'product', 'test', 'testimonial', 'pro', 'authUser'));
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
            Toastr::error('Login Unsuccessful', 'Invalid phone number or password!');
            return redirect()->back();
        }
    }

  
    // public function loginCheck(Request $request)
    // {
    //     $request->validate([
    //         'phone' => 'required',
    //     ]);
    

    //     $fullApi='http://prioritysms.a4add.com/api/sendhttp.php?authkey=341137A6fjmQ8YSgq95f588459P1&mobiles={num}&message={msg}&sender=AMCSFN&route=4&country=91&unicode=1&DLT_TE_ID={tid}';
    //     $tid='1207162731815046564';
    //     $msg="AMCSFNCK B.Sc Nursing Application 2024-25. Your Applicant ID: ".$applicantid." and Password: ".$password .".\n For more details www.amcsfnck.com or https://bit.ly/3AR0uPs";;
    //     $msg = urlencode($msg);
    //                  $num =$mob;
    //     $api     = str_replace(['{msg}','{num}','{tid}'],[$msg,$num,$tid],$fullApi);  
    //     $url = $api;
    //     $ch = curl_init($url);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    //     curl_setopt($ch, CURLOPT_URL,$url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //     $output = curl_exec ($ch);
    //     $info = curl_getinfo($ch);
    //     $http_result = $info ['http_code'];
    //     curl_close ($ch);



    //     $otp = random_int(100000, 999999);
    //     $fullApi='http://prioritysms.a4add.com/api/sendhttp.php?authkey=341137A6fjmQ8YSgq95f588459P1&mobiles={num}&message={msg}&sender=AMCSFN&route=4&country=91&unicode=1&DLT_TE_ID={tid}';
    //     $tid='1207162731815046564';
    //     $num = $request->phone;
    
    //     // Check if the user already exists
    //     $user = User::where('phone', $num)->first();
    
    //     if ($user) {
    //         // User exists, send OTP
    //         $msg="AMCSFNCK B.Sc Nursing Application 2024-25. Your Applicant ID: ".$applicantid." and Password: ".$password .".\n For more details www.amcsfnck.com or https://bit.ly/3AR0uPs";;
    //  } else {
    //         // User does not exist, create new user and send OTP
    //         $user = User::create([
    //             'phone' => $num,
    //             'password' => bcrypt($otp), // Save OTP as password
    //             // You can add additional default values here if required
    //         ]);
    //         $msg="AMCSFNCK B.Sc Nursing Application 2024-25. Your Applicant ID: ".$applicantid." and Password: ".$password .".\n For more details www.amcsfnck.com or https://bit.ly/3AR0uPs";;
    //     }
    
    //     // $msg = urlencode($msg);
    //     $msg = urlencode($msg);
    //     $num =$mob;
    //     $api     = str_replace(['{msg}','{num}','{tid}'],[$msg,$num,$tid],$fullApi);
      
    //     $url = $api;
    //   ;

    //     $ch = curl_init($url);
    //     curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    //     curl_setopt($ch, CURLOPT_URL,$url);
    //     curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    //     $output = curl_exec ($ch);
    //     $info = curl_getinfo($ch);
    //     $http_result = $info ['http_code'];
    //     curl_close ($ch);


    //     if ($http_result == 200) {
    //         // OTP sent successfully
    //         auth()->login($user);
    //         $user = Auth::user();
    //         if ($user->role_id == 2) {
    //             Toastr::success('Successfully logged in', 'Welcome!');
    //             // Fetch required data after login
    //             $pageaboutitem = DB::table('pageaboutitem')->get();
    //             $product = DB::table('product')->limit(3)->get();
    //             $pro = DB::table('product')->get();
    //             $test = DB::table('test')->get();
    //             $testimonial = DB::table('testimonial')->get();
    //             $authUser = $user;
    //                   return redirect()->back();
    //         } else {
    //             // Failed login attempt
    //             $authUser = null;
    //             Toastr::error('Login Unsuccessful', 'Invalid!');
    //             return redirect()->back();
    //         }
    //     } else {
    //         // OTP sending failed
    //         Toastr::error('OTP sending failed', 'Error!');
    //         return redirect()->back();
    //     }
    // }
    


    public function store(Request $request)
    {

        $data = [
            'name' => $request->uname,
            'phone' => $request->uphone,
            'email' => $request->umail,
            'password' => Hash::make($request->upassword),
            'role_id' => 2,

        ];
        // dd($data);
        Register::create($data);

        return redirect()->back()->with('success', 'Registration successful. Please check your email to verify your registration.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }











}
