<?php

namespace App\Http\Controllers;

use App\Models\KategoriProgam;
use App\Models\Program;
use Illuminate\Http\Request;

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
}
