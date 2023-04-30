<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function index(){
        return view('admin.admin', [
            "all" => Program::all(),
            "pending" => Program::where('status', 1)->get(),
            "done" => Program::where('status', 5)->get()
        ]);
    }

    public function indexuser(){
        return view('admin.user', [
            "user"=>User::paginate(10)
        ]);
    }
}
