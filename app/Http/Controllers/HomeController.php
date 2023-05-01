<?php

namespace App\Http\Controllers;

use App\Models\KategoriProgam;
use App\Models\Program;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index', [
            "kategori" => KategoriProgam::all(),
            "program" => Program::paginate(9)
        ]);
    }

    public function profil(){
        return view('user.profil');
    }
}
