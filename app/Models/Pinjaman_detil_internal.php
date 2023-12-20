<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pinjaman_detil_internal extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_peminjaman',
        'id_userprodi',
        'nama_penanggung_jawab',
        'no_kontak',
        'id_sesi'
    ];
}
