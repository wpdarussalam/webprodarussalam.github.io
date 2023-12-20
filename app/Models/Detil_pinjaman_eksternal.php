<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detil_pinjaman_eksternal extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_peminjaman',
        'nama_penanggung_jawab',
        'no_kontak',
        'id_admin',
        'id_sesi'

    ];
}
