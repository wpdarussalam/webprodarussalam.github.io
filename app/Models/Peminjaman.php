<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    public $table = 'peminjaman';
    protected $fillable = [
        'no_peminjaman',
        'tanggal_mulai',
        'tanggal_selesai',
        'keperluan',
        'is_internal',
        'id_kepala_CBT',
    ];
}
