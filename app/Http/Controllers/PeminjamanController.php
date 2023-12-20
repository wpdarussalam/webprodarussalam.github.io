<?php

namespace App\Http\Controllers;

use App\Models\Detil_pinjaman_eksternal;
use App\Models\Peminjaman;
use App\Models\Pinjaman_detil_internal;
use App\Models\SesiPeminjaman;
use App\Models\User;
use App\Models\User_prodi;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    public function index()
    {
        $peminjaman = Peminjaman::where('is_internal', 1)
            ->get();
        $status1 = 'INTERNAL';
        $status2 = 'EKSTERNAL';
        return view('peminjaman.list-peminjaman', compact('peminjaman', 'status1', 'status2'));
    }

    public function tambah_peminjaman()
    {
        return view('peminjaman.tambah_peminjaman');
    }


    public function simpan_peminjaman(Request $request)
    {
        // Validasi peminjaman
        $request->validate([
            'tanggal_mulai' => 'required',

            'tanggal_selesai' => 'required',
            'keperluan' => 'required|string',
            'is_internal' => 'required|string'
        ]);

        // [// Simpan gambar ke storage
        // if ($request->hasFile('gambar')) {
        //     $image = $request->file('gambar');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('gambar'), $imageName);
        // } else {
        //     $imageName = null; // Atau sesuaikan dengan nilai default jika tidak ada gambar yang diunggah
        // }]
        $pem = Peminjaman::orderBy('no_peminjaman', 'DESC')->first();
        $nopem = $pem['no_peminjaman'];

        $data = [
            'no_peminjaman' => $nopem + 1,
            'tanggal_mulai' => $request->tanggal_mulai . " " . $request->jam_mulai,
            'tanggal_selesai' => $request->tanggal_selesai . " " . $request->jam_selesai,
            'keperluan' => $request->keperluan,
            'is_internal' => $request->is_internal,

        ];

        Peminjaman::create($data);

        return redirect()->back()->with('success', 'Data Berhasil Disimpan');
    }

    public function tampilpeminjaman($id)
    {
        $peminjaman = Peminjaman::where('id', $id)->first();
        return view('peminjaman.tampil_peminjaman', compact('peminjaman'));
    }

    // public function updatepeminjaman($id)
    // {
    //     $peminjaman = Peminjaman::where('id', $id)->first();
    //     return view('peminjaman.update_peminjaman', compact('peminjaman'));
    // }


    public function update_peminjaman(Request $request, $id)
    {
        // Validasi peminjaman
        $request->validate([
            'no_peminjaman' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_selesai' => 'required',
            'keperluan' => 'required|string',
            'is_internal' => 'required|string'
        ]);

        // Simpan gambar ke storage
        // if ($request->hasFile('gambar')) {
        //     Storage::delete('public/gambar/' . $request->input('gambar_lama'));
        //     $image = $request->file('gambar');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('gambar'), $imageName);
        // } else {
        //     $imageName = $request->input('gambar_lama'); // Atau sesuaikan dengan nilai default jika tidak ada gambar yang diunggah
        // }
        $data = [
            'NIP' => $request->NIP,
            'no_peminjaman' => $request->no_peminjaman,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_selesai' => $request->tanggal_selesai,
            'keperluan' => $request->keperluan,
            'is_internal' => $request->is_internal
        ];

        Peminjaman::find($id)->update($data);

        return redirect()->back()->with('success', 'Data Berhasil Diupdate');
    }


    public function hapuspeminjaman($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        // // Hapus gambar terkait
        // if ($peminjaman->gambar) {
        //     Strong::delete('public/gambar/' . $peminjaman->gambar);
        // }

        // Hapus Data dari database
        $peminjaman->delete();
        return redirect('/peminjaman')->with('success', 'Data berhasil dihapus');
    }

    public function TampilDetilInternal($id)
    {
        $peminjaman = Peminjaman::join('pinjaman_detil_internals', 'peminjaman.id', '=', 'pinjaman_detil_internals.id_peminjaman')
            ->join('user_prodis', 'user_prodis.id', '=', 'pinjaman_detil_internals.id_userprodi')
            ->join('sesi_peminjamen', 'sesi_peminjamen.id', '=', 'pinjaman_detil_internals.id_sesi')
            ->where('peminjaman.id', $id)
            ->get();
        $id_peminjaman = $id;
        $prodi = User_prodi::get();
        $sesi = SesiPeminjaman::get();
        return view('peminjaman.detail_internal', compact('peminjaman', 'prodi', 'sesi', 'id_peminjaman'));
    }

    public function simpanPinjamanInternal(Request $request)
    {
        // validasi User_prodi
        $validator = $request->validate([
            'id_userprodi' => 'required|string',
            'nama_penanggung_jawab' => 'required|string|max:255',
            'no_kontak' => 'required|string',
            'id_sesi' => 'required',
        ]);

        $data = [
            'id_userprodi' => $request->id_userprodi,
            'nama_penanggung_jawab' => $request->nama_penanggung_jawab,
            'no_kontak' => $request->no_kontak,
            'id_sesi' => $request->id_sesi,
            'id_peminjaman' => $request->id_peminjaman,

        ];

        Pinjaman_detil_internal::create($data);

        return redirect()->back()->with('success', 'Data Berhasil Disimpan');
    }

    public function peminjaman_external()
    {
        $peminjaman = Peminjaman::where('is_internal', 0)
            ->get();
        $status1 = 'INTERNAL';
        $status2 = 'EKSTERNAL';
        return view('peminjaman.list_external', compact('peminjaman', 'status1', 'status2'));
    }


    public function tambah_peminjaman_eksternal()
    {
        return view('peminjaman.tambah_external');
    }

    public function TampilDetilEksternal($id)
    {
        $peminjaman = Peminjaman::join('detil_pinjaman_eksternals', 'peminjaman.id', '=', 'detil_pinjaman_eksternals.id_peminjaman')
            ->join('sesi_peminjamen', 'sesi_peminjamen.id', '=', 'detil_pinjaman_eksternals.id_sesi')
            ->join('users', 'users.id', '=', 'detil_pinjaman_eksternals.id_admin')
            ->where('peminjaman.id', $id)
            ->get();
        $id_peminjaman = $id;
        $sesi = SesiPeminjaman::get();
        return view('peminjaman.detail_external', compact('peminjaman', 'sesi', 'id_peminjaman'));
    }

    public function simpanPinjamanEksternal(Request $request)
    {
        // validasi User_prodi
        $validator = $request->validate([
            'nama_penanggung_jawab' => 'required|string|max:255',
            'no_kontak' => 'required|string',
            'id_sesi' => 'required',
        ]);

        $data = [
            'nama_penanggung_jawab' => $request->nama_penanggung_jawab,
            'no_kontak' => $request->no_kontak,
            'id_sesi' => $request->id_sesi,
            'id_peminjaman' => $request->id_peminjaman,
            'id_admin' => $request->id_admin,
        ];

        Detil_pinjaman_eksternal::create($data);

        return redirect()->back()->with('success', 'Data Berhasil Disimpan');
    }
}
