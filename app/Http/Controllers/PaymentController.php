<?php

namespace App\Http\Controllers;
use App\Models\Program;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index(){
    return view('payment');
}

    public function checkout(Request $request, Payment $payment){
        $request->request->add(['nominal' => $request -> nominal, 'status' => 'Unpaid']);

        // "program" => $program,
        // $payment = Payment::create($request->all());
        // dd($request->all());


    // // Set your Merchant Server Key
    // \Midtrans\Config::$serverKey = config('midtrans.server_key');
    // // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    // \Midtrans\Config::$isProduction = false;
    // // Set sanitization on (default)
    // \Midtrans\Config::$isSanitized = true;
    // // Set 3DS transaction for credit card to true
    // \Midtrans\Config::$is3ds = true;

    // $params = array(
    //     'transaction_details' => array(
    //         'order_id' => $payment->id,
    //         'gross_amount' => $payment->nominal,
    //     ),
    //     'customer_details' => array(
    //         'nama' => $request->namaDonatur,
    //         'nominal' => $request->nominal,
    //         'doa' => $request->doa,
    //     ),
    // );

    // $snapToken = \Midtrans\Snap::getSnapToken($params);
    // dd($snapToken);
    // return view('payment', compact('snapToken', 'payment'));


    // Set your Merchant Server Key
    \Midtrans\Config::$serverKey = config('midtrans.server_key');
    // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    \Midtrans\Config::$isProduction = false;
    // Set sanitization on (default)
    \Midtrans\Config::$isSanitized = true;
    // Set 3DS transaction for credit card to true
    \Midtrans\Config::$is3ds = true;

    $params = array(
        'transaction_details' => array(
            'order_id' => $payment->id,
            'gross_amount' => $payment->nominal,
        ),
        'customer_details' => array(
            'nama' => $request->namaDonatur,
            'nominal'=>$request->nominal,
            'doa' => $request->doa,
        ),
    );

    $snapToken = \Midtrans\Snap::getSnapToken($params);
    dd($snapToken);
    return view('payment', compact('snapToken', 'payment'));
    }



}
