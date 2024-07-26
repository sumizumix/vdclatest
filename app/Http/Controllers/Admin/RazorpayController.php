<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Booking;
use App\Models\Bookpackage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use App\Mail\PackageApproved;
use App\Mail\PackageRejected;
use Illuminate\Support\Facades\Auth;
use App\Models\PaymentModel;
use Razorpay\Api\Api;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Mail;
use DB;
use Exception;

class RazorpayController extends Controller
{
    
    public function store(Request $request) {
        
        $input = $request->all();   
        
        $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        if(count($input) && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
                $payment = PaymentModel::create([
                    'r_payment_id' => $response['id'],
                    'method' => $response['method'],
                    'currency' => $response['currency'],
                    'user_email' => $response['email'],
                    'amount' => $response['amount']/100,
                    'json_response' => json_encode((array)$response),
                    'userid' =>Auth::id() ,

                ]);
                
                $userId = Auth::id();
                $razorid = $response['id'];
                $method = $response['method'];
                $amount = $response['amount'];
                
                $cartStatus = DB::table('cart')
                                ->where('user_id', $userId)
                                ->where('status', 'approved')
                                ->where('razorid', null)
                                ->update([
                                    'paystatus' => 1,
                                    'razorid' => $razorid,
                                    'method' =>$method,
                                    'amount'=>$amount
                                ]);
                
               
                
            } 
            catch(Exception $e) {
                return $e->getMessage();
                Session::put('error',$e->getMessage());
                return back()->with('success', 'Payment Successful!');            }
        }
        return back()->with('success', 'Payment Successful!');   
     }

  

//orginal
    // public function store(Request $request) {
        
    //     $input = $request->all(); 
    //     $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
    //     $payment = $api->payment->fetch($input['razorpay_payment_id']);
    //     if(count($input) && !empty($input['razorpay_payment_id'])) {
    //         try {
    //             $response = $api->payment->fetch($input['razorpay_payment_id'])->capture(array('amount' => $payment['amount']));
    //             $payment = PaymentModel::create([
    //                 'r_payment_id' => $response['id'],
    //                 'method' => $response['method'],
    //                 'currency' => $response['currency'],
    //                 'user_email' => $response['email'],
    //                 'amount' => $response['amount']/100,
    //                 'json_response' => json_encode((array)$response)

    //             ]);

    //         } 
    //         catch(Exception $e) {
    //             return $e->getMessage();
    //             Session::put('error',$e->getMessage());
    //             return back()->with('success', 'Payment Successful!');            }
    //     }
    //     return back()->with('success', 'Payment Successful!');   
    //  }
}
