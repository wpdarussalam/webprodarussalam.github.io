<?php

namespace App\Http\Controllers;

use App\Models\Kepala_CBT;
use Illuminate\Http\Request;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;
use Symfony\Contracts\Service\Attribute\Required;

class Kepala_cbtController extends Controller
{
    public function index()
    {
        $kepala_cbt = Kepala_CBT::get();
        return view('kepala_cbt.kepala_cbt', compact('kepala_cbt'));
    }

    public function tambah_kepala_cbt()
    {
        return view('kepala_cbt.tambah_kepala_cbt');
    }


    public function simpan_kepala_cbt(Request $request)
    {
        // Validasi kepala_cbt
        $request->validate([
            'nip' => 'required',
            'nama' => 'required|string',
            'user_name' => 'required|string',
            'password' => 'required',
            'email' => 'required|string',
            'kontak' => 'required|',
        ]);

        // [// Simpan gambar ke storage
        // if ($request->hasFile('gambar')) {
        //     $image = $request->file('gambar');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('gambar'), $imageName);
        // } else {
        //     $imageName = null; // Atau sesuaikan dengan nilai default jika tidak ada gambar yang diunggah
        // }]
        $data = [
            'NIP' => $request->nip,
            'nama' => $request->nama,
            'user_name' => $request->user_name,
            'password' => $request->password,
            'email' => $request->email,
            'kontak' => $request->kontak
        ];

        Kepala_CBT::create($data);

        return redirect()->back()->with('success', 'Data Berhasil Disimpan');
    }

    public function tampilkepala_cbt($id)
    {
        $kepala_cbt = Kepala_CBT::where('id', $id)->first();
        return view('kepala_cbt.tampil_kepala_cbt', compact('kepala_cbt'));
    }

    public function updatekepala_cbt($id)
    {
        $kepala_cbt = Kepala_CBT::where('id', $id)->first();
        return view('kepala_cbt.update_kepala_cbt', compact('kepala_cbt'));
    }


    public function update_kepala_cbt(Request $request, $id)
    {
        // Validasi kepala_cbt
        $request->validate([
            'NIP' => 'required|string',
            'nama' => 'required|string',
            'user_name' => 'required|string',
            'password' => 'required|string',
            'email' => 'required|string',
            'kontak' => 'required|string'
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
            'nama' => $request->nama,
            'user_name' => $request->user_name,
            'password' => $request->password,
            'email' => $request->email,
            'kontak' => $request->kontak
        ];

        Kepala_CBT::find($id)->update($data);

        return redirect()->back()->with('success', 'Data Berhasil Diupdate');
    }


    public function hapuskepala_cbt($id)
    {
        $kepala_cbt = Kepala_CBT::findOrFail($id);
        // // Hapus gambar terkait
        // if ($kepala_cbt->gambar) {
        //     Strong::delete('public/gambar/' . $kepala_cbt->gambar);
        // }

        // Hapus Data dari database
        $kepala_cbt->delete();
        return redirect('/kepala_cbt')->with('success', 'Data berhasil dihapus');
    }
}
