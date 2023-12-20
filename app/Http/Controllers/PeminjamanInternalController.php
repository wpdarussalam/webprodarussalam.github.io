<?php

namespace App\Http\Controllers;

use App\Models\SesiPeminjaman;
use Illuminate\Http\Request;

class PeminjamanInternalController extends Controller
{
    public function index()
    {
        $sesi = SesiPeminjaman::get();
        return view('peminjaman_ruangan.pinjamaninternal', compact('sesi'));
    }
}
