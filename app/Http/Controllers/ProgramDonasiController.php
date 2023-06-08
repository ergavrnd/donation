<?php

namespace App\Http\Controllers;

use App\Models\KategoriProgam;
use App\Models\Program;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProgramDonasiController extends Controller
{
    public function index($slug){
        return view ('detailprogram',[
            "program" => Program::where('slug', $slug)->first()
        ]);
    }

    public function all(){
        return view ('allprogram',[
            "program" => Program::all(),
            "kategori" => KategoriProgam::all()
        ]);
    }

    public function createdonasi(){
        return view ('createprogram',[
            "kategori" => KategoriProgam::all()
        ]);
    }

    public function payment(Request $request, Program $program, $id){
        // dd($program);
        $program = program::findOrFail($id);
        return view ('user.payment',[
            "program" => $program,
            // "kategori" => KategoriProgam::all()
        ]);
    }

    // public function checkout(Request $request, Payment $payment){
    //     $request->request->add(['nominal' => $request -> nominal, 'status' => 'Unpaid']);

    //     // "program" => $program,
    //     // $payment = Payment::create($request->all());
    //     // dd($request->all());


    // // // Set your Merchant Server Key
    // // \Midtrans\Config::$serverKey = config('midtrans.server_key');
    // // // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
    // // \Midtrans\Config::$isProduction = false;
    // // // Set sanitization on (default)
    // // \Midtrans\Config::$isSanitized = true;
    // // // Set 3DS transaction for credit card to true
    // // \Midtrans\Config::$is3ds = true;

    // // $params = array(
    // //     'transaction_details' => array(
    // //         'order_id' => $payment->id,
    // //         'gross_amount' => $payment->nominal,
    // //     ),
    // //     'customer_details' => array(
    // //         'nama' => $request->namaDonatur,
    // //         'nominal' => $request->nominal,
    // //         'doa' => $request->doa,
    // //     ),
    // // );

    // // $snapToken = \Midtrans\Snap::getSnapToken($params);
    // // dd($snapToken);
    // // return view('payment', compact('snapToken', 'payment'));


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
    //         'nominal'=>$request->nominal,
    //         'doa' => $request->doa,
    //     ),
    // );

    // $snapToken = \Midtrans\Snap::getSnapToken($params);
    // dd($snapToken);
    // return view('payment', compact('snapToken', 'payment'));
    // }
    public function checkout(Request $request, Payment $payment){
        // Mengambil nilai input dari request
    $inputString = $request->input('nominal');

    // // Menghapus tanda koma dari string
    $cleanString = str_replace(',', '', $inputString);

    // Mengkonversi string yang telah dibersihkan menjadi integer menggunakan intval()
    $nominal = intval($cleanString);
//  dd($request->input('radio'));

        if($request->hide == true) {
            $request -> request->add(['nominal' => $nominal, 'status' => 'Unpaid', 'id_user' => auth()->user()->id, 'id_program' => $request->id_program, 'namaDonatur'=>'anonim' ]);
        }else{
            $request -> request->add(['nominal' => $nominal, 'status' => 'Unpaid', 'id_user' => auth()->user()->id, 'id_program' => $request->id_program, ]);
        }
            $payment = Payment::create($request->all());

        // $request->request->add(['total_harga' => $request->harga + 2000, 'status' => 'Unpaid']);


        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = config('midtrans.is_production');
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;

        $params = array(
            'transaction_details' => array(
                'order_id' => rand(),
                'gross_amount' => $payment->nominal,
                // 'order_id' => $donasi['id'],
                // 'gross_amount' => $donasi['total_harga']
            ),
            'customer_details' => array(
                'first_name' => $request->namaDonatur,
                'last_name' => '',
                'email' => $request->email,
                // 'id_user' => $request->id_user,
                // 'id_program' => $request->id     ,


            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);

        return view('detail-payment', compact('snapToken','payment'));
    }

    public function store (Request $request){
        $validatedData = $request->validate([
            "nama" => 'required|max:255',
            "id_kategori" => 'required',
            "deskripsi" => 'max:5000',
            "gambar" => 'image|file|max:10240',
            "deadline" => 'required'
        ]);
        $rupiah1 = str_replace('.', '', $request->targetdana);
        $rupiah2 = str_replace('Rp', '', $rupiah1);
        $rupiah3 = str_replace(',00', '', $rupiah2);
        $validatedData['targetdana'] = $rupiah3;

        if($request->file('gambar')){
            $validatedData['gambar'] = $request->file('gambar')->store('program');
        }
        $validatedData['slug'] = Str::random(30);
        $validatedData['id_user'] = auth()->user()->id;
        // dd($validatedData);
        Program::create($validatedData);
        $program = Program::where('slug', $validatedData['slug'])->first();
        return back()->with('success', "Program donasi: $program->nama berhasil diajukan");
    }
}
