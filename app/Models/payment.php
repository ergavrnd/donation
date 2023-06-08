<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// class payment extends Model
// {
    // use HasFactory;
// }

// ========================================

class payment extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function program(){
        return $this->belongsTo(Program::class, 'id_program');
    }
}
