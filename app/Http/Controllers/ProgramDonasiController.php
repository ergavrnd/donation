<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;

class ProgramDonasiController extends Controller
{
    public function index($slug){
        return view ('detailprogram',[
            "program" => Program::where('slug', $slug)->first()
        ]);
    }
}
