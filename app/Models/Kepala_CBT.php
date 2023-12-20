<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepala_CBT extends Model
{
    use HasFactory;
    protected $fillable = [
        'NIP',
        'nama',
        'user_name',
        'password',
        'email',
        'kontak',
    ];
}
