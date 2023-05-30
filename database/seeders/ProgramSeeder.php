<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Program::create([
            'id_kategori' => "1",
            'id_user' => "1",
            'nama' => "Agus Wirawa",
            'slug' =>'coba',
            'deskripsi' => 'bantu donasi saudara kita...',
            'gambar' => "program/banjir3.jpg",
            'targetDana' => '500000000',
            'danaskrg' => '0',
            'status' => '0',
            'deadline' => '2023/06/01',
        ]);
    }
}
