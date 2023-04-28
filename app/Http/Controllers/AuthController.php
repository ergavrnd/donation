<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

class AuthController extends Controller
{
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    public function indexvalidasi(){
        return view('validasi');
    }

    public function home(){
        return view('home');
    }

    public function validasi(Request $request){
        // dd("erga cantik");
        $rules = [
            "username" => 'required|min:5|max:255|unique:users',
            "password" => 'required|min:5|max:25|confirmed'
        ];

        $validatedData = $request->validate($rules);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::where('id', auth()->user()->id)->update($validatedData);
        return redirect('/home');
    }

    public function login()
    {
        return view('user.login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            "username" => 'required',
            "password" => 'required'
        ]);

        $user = User::where('username', $request->username)->first();
        // dd($user);
        if($user){
            if($user->email_verified_at == NULL){
                return back()->with('verifikasi', 'Akun anda belum terverifikasi, Silahkan cek email anda untuk melihat kode OTP.');
            }else{
                if(Auth::attempt($credentials)){
                    $request->session()->regenerate();
                    if(auth()->user()->roleid ==1){
                        return redirect()->intended('/dashboard');
                    }else{
                        return redirect()->intended('/home');
                    }
                }else{
                    return back()->with('loginError', 'Silahkan coba lagi untuk masuk ke sistem');
                }
            }
        }else{
            return back()->with('loginError', 'Silahkan coba lagi untuk masuk ke sistem');
        }

    }

    public function register()
    {
        return view('user.register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            "name" => 'required|max:255',
            "email" => 'required|email|unique:users',
            "username" => 'min:5|max:255|unique:users',
            "password" => 'min:5|max:25|confirmed',
            "otp" => 'required|unique:users'

        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        $user = User::where('email', $request->email)->first();
        Mail::send('email.verifikasiemail', ['otp' => $request->otp, 'user' => $user], function($message) use($request){
            $message->to($request->email);
            $message->subject('Verifikasi Email DoNation');
        });
        return redirect('/verifikasi')->with('success', "Silahkan verifikasi akun, Sistem telah mengirim kode otp ke email anda");
    }

    public function verifikasi()
    {
        return view('verifikasi');
    }

    public function postverifikasi(Request $request){
        $user = User::where('otp', $request->otp)->first();
        if ($user) {
            if($request->otp == $user->otp){
                $rules = [
                    "otp" => 'required'
                ];

                $validatedData = $request->validate($rules);
                $validatedData['email_verified_at'] = date("Y-m-d H:i:s");
                User::where('id', $user->id)->update($validatedData);
                $erga['otp'] = null;;
                User::where('id', $user->id)->update($erga);
                return redirect('/login')->with('success', 'Akun anda telah terverifikasi, Silahkan masuk');
            }else{
                return back()->with('error', 'Kode otp salah!');
            }
        } else {
            return back()->with('error', 'Kode otp salah!');
        }


    }
}
