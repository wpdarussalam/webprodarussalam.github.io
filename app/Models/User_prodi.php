<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_prodi extends Model
{
    use HasFactory;
    protected $fillable = [
        'username',
        'nama_prodi',
        'password',

    ];
}
