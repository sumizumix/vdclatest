<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;

use Toastr;


use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

// use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Report;

class CartController extends Controller
{
    public function show()
    {
        // Logic to fetch cart items and display the cart view
        return view('cart.show');
    }
    public function addToCart(Request $request)
    {

        if (Auth::check()) {
            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->product_id = $request->product_id;
            $cart->quantity = 1;
            $cart->type = $request->type;
            $cart->status = "approved";

            $cart->save();

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'User not authenticated']);
        }
    }

    // public function cart()
    // {

    //     $data = DB::table('cart')
    //         ->select('product.*', 'users.*', 'product.name as pname', 'test.name as tname','test.*',
    //         'test.price as testprice','product.price as productprice', 'product.description as pdescription', 'test.description as tdescription'
    //         ,'test.image as testimage','product.image as productimage','cart.id as cid')
    //         ->leftJoin('product', 'product.id', '=', 'cart.product_id')
    //         ->leftJoin('test', 'test.id', '=', 'cart.product_id')
    //         ->join('users', 'users.id', '=', 'cart.user_id')
    //         ->where('users.id', Auth::id())
    //         ->get();

    //     return view('user.auth.patients.orders', compact('data'));
    // }

    public function cart()
    {
        $package = DB::table('cart')
            ->select(
                'product.*',
                'users.*',
                'product.name as pname',
                'cart.*',
                'product.price as productprice',
                'product.description as pdescription',
                'product.image as productimage',
                'cart.id as cid',
                'cart.status as cart_status',
                'cart.paystatus as pstatus'
            )
            ->leftJoin('product', 'product.id', '=', 'cart.product_id')
            ->join('users', 'users.id', '=', 'cart.user_id')
            ->where('users.id', Auth::id())
            ->where('cart.type', "package")
            ->get();

        $test = DB::table('cart')
            ->select(
                'test.*',
                'users.*',
                'test.name as pname',
                'cart.*',
                'test.price as productprice',
                'test.description as pdescription',
                'test.image as productimage',
                'cart.id as cid',
                'cart.status as cart_status',
                'cart.paystatus as pstatus'
            )

            ->leftJoin('test', 'test.id', '=', 'cart.product_id')
            ->join('users', 'users.id', '=', 'cart.user_id')
            ->where('users.id', Auth::id())
            ->where('cart.type', "test")
            ->get();



        $data = array_merge($package->toArray(), $test->toArray());

        


             $cart = DB::table('cart')
            ->select( 'users.*','cart.id as cid')
            ->join('users', 'users.id', '=', 'cart.user_id')
            ->where('users.id', Auth::id())
            ->where('cart.paystatus', 0)
            ->get();


        return view('user.auth.patients.orders', compact('data','cart'));
    }



    public function addToCartTest(Request $request)
    {
        if (Auth::check()) {
            $cart = new Cart();
            $cart->user_id = Auth::id();
            $cart->product_id = $request->product_id;
            $cart->quantity = 1;
            $cart->save();

            return response()->json(['success' => true]);
        } else {
            return response()->json(['success' => false, 'message' => 'User not authenticated']);
        }
    }

    public function downloadpage()
    {
        $report = DB::table('report')
            ->select('users.*', 'report.name as rname', 'report.*')
            ->join('users', 'users.phone', '=', 'report.phone')
            ->where('users.id', Auth::id())
            ->get();

        return view('user.auth.patients.download', compact('report'));
    }




    public function generatePdf($id)
    {

        $item = Report::find($id);


        if (!$item) {
            return redirect()->back()->with('error', 'Item not found');
        }
        $imageUrl = asset('uploads/' . $item->report);

        $dompdf = new Dompdf();


        $dompdf->loadHtml('
<h1 style="text-align: center;">DOWNLOAD RESULT</h1>
<p style="text-align: center;">Name: ' . $item->name . '</p>
<div style="text-align: center;">
    <img src="' . $imageUrl . '" alt="Report Image" style="max-width: 100%; height: auto;">
</div>
');
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $pdfContent = $dompdf->output();

        return response($pdfContent)
            ->header('Content-Type', 'application/pdf')
            ->header('Content-Disposition', 'attachment; filename="example.pdf"');
    }







    // public function pdfindex($id)
    // {
    //     $report=Report::find($id);
    //     $data = [
    //         'title' => 'orders',
    //         'date' => date('m/d/Y') ,
    //         'orders'=>$report
    //     ];


    //     $pdf = PDF::loadView('pdf', $data);

    //     return $pdf->download('movieticket.pdf');
    // }








    public function approve($id)
    {
        $cart = Cart::find($id);
        if ($cart) {
            $cart->status = 'approved';
            $cart->save();
        }

        return redirect()->back()->with('success', 'Cart item approved successfully.');
    }

    public function reject($id)
    {
        $cart = Cart::find($id);
        if ($cart) {
            $cart->status = 'rejected';
            $cart->save();
        }

        return redirect()->back()->with('success', 'Cart item rejected successfully.');
    }
    // public function cartorderindex()
    // {

    // $cart = DB::table('cart')
    // ->select('product.*','product.name as pname','test.*','users.*','cart.*','payment.*','users.name as uname','test.name as tname', 'test.price as testprice','product.price as productprice','cart.updated_at as cdate')
    // ->leftJoin('product','product.id', '=', 'cart.product_id')
    // ->leftJoin('test', 'test.id', '=', 'cart.product_id')
    // ->join('users', 'users.id', '=', 'cart.user_id')
    // ->join('payment', 'payment.r_payment_id', '=', 'cart.razorid')
    // ->where('users.id', Auth::id())
    // ->get();

    // return view('user.auth.patients.orderstatus', compact('cart'));

    // }

    public function cartorderindex()
    {

        $cart = DB::table('cart')
            ->select('product.*', 'product.name as pname', 'test.*', 'users.*', 'cart.*', 'users.name as uname', 'test.name as tname', 'test.price as testprice', 'product.price as productprice', 'cart.updated_at as cdate')
            ->leftJoin('product', 'product.id', '=', 'cart.product_id')
            ->leftJoin('test', 'test.id', '=', 'cart.product_id')
            ->join('users', 'users.id', '=', 'cart.user_id')

            ->where('users.id', Auth::id())
            ->get();

        return view('user.auth.patients.orderstatus', compact('cart'));
    }



    public function destroyordershow($id)
    {
        DB::table('cart')->where('id', $id)->delete();
        return back()->with('success', 'Deleted successfully!');
    }


    public function showReceipt()
    {
        $paymentDetails = Session::get('payment');
        $cart = DB::table('payment')->get();

        return view('user.auth.patients.receipt', compact('paymentDetails', 'cart'));
    }
}
