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
use App\Models\User;
use Razorpay\Api\Api;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Support\Facades\Mail;
use DB;
use Exception;

class RazorpayController extends Controller
{

    public function store(Request $request)
    {

        $input = $request->all();
        if ($input['status'] == "CHARGED") {
            $user_id = DB::table('cart')
                ->select("user_id")
                ->where('razorid', $input['order_id'])
                ->where('paystatus', '0')
                ->first()->user_id;
            $payment = PaymentModel::create([
                'r_payment_id' => $input['order_id'],
                'signature' => $input['order_id'],
                'userid' => $user_id,

            ]);

            //         $razorid = $response['id'];
            //         $method = $response['method'];
            //         $amount = $response['amount'];

            DB::table('cart')
                ->where('user_id', $user_id)
                ->where('razorid', $input['order_id'])
                ->update([
                    'paystatus' => 1,
                ]);



            //     } catch (Exception $e) {
            //         return $e->getMessage();
            //         Session::put('error', $e->getMessage());
            //         return back()->with('success', 'Payment Successful!');
            //     }
            // }

            $user = User::find($user_id);
            Auth::login($user);



            // return view('user.auth.patients.orderstatus', compact('cart', 'groupedCart'))->with('success', 'Payment Successful!');
            return redirect('cart-status')->with('success', 'Payment Successful!');
        } else {
            $user_id = DB::table('cart')
                ->select("user_id")
                ->where('razorid', $input['order_id'])
                ->where('paystatus', '0')
                ->first()->user_id;

            $user = User::find($user_id);
            Auth::login($user);
            return redirect('cart')->with('error', 'Payment Unsuccessfull!');

        }

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
