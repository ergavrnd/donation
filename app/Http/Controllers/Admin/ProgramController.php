<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\KategoriProgam;
use App\Models\Program;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class ProgramController extends Controller
{
    public function index(){
        $program = Program::paginate(10);
        return view('admin.program.index', [
            "title" => "Dashboard-Program",
            "program" => $program
        ]);
    }

    public function indexcreate(){
        return view('admin.program.createprogram', [
            "title" => "Dashboard-BuatProgram",
            "kategori" => KategoriProgam::all()
        ]);
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
        $kategori = KategoriProgam::where('id', $request->id_kategori)->get();
        $validatedData['slug'] = $kategori[0]->slug."-".Str::random(30);
        $validatedData['status'] = 2;
        $validatedData['id_user'] = auth()->user()->id;
        // dd($validatedData);
        Program::create($validatedData);
        $program = Program::where('slug', $validatedData['slug'])->first();
        return back()->with('success', "Program bantuan: $program->nama berhasil ditambahkan");
    }

    public function allprogram(){
        return view('admin.allprogram', [
            "kategori" => KategoriProgam::all(),
            "program" => Program::all()
        ]);
    }

    public function pendingprogram(){
        return view('admin.pendingprogram', [
            "program" => Program::where('status', 1)->paginate(10)
        ]);
    }

    public function doneprogram(){
        return view('admin.doneprogram', [
            "program" => Program::where('status', 5)->get()
        ]);
    }

    public function detailprogram($slug){
        return view('admin.program.detailprogram', [
            "program" => Program::where('slug', $slug)->first()
        ]);
    }

    public function verifikasi(Request $request){
        $program = Program::where('id', $request->id)->first();
        $update['status'] = 2;
        $program->update($update);
        return redirect('/dashboard/pendingprogram')->with('success', 'Program donasi berhasil di verifikasi');
    }

    public function batalkan(Request $request){
        $program = Program::where('id', $request->id)->first();
        $update['status'] = 3;
        $update['pesanbatal'] = $request->pesanbatal;
        $program->update($update);
        return redirect('/dashboard/pendingprogram')->with('batalkan', 'Program donasi berhasil dibatalkan');
    }

}
