<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FasilitasController extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::get();
        return view('fasilitas.list-fasilitas', compact('fasilitas'));
    }

    public function tambah_fasilitas()
    {
        return view('fasilitas.tambah_fasilitas');
    }


    public function simpan_fasilitas(Request $request)
    {
        // Validasi fasilitas
        $request->validate([
            'nama_fasilitas' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
            'jumlah' => 'required|string',
            'keterangan' => 'required',
        ]);

        // Simpan gambar ke storage
        if ($request->hasFile('gambar')) {
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gambar'), $imageName);
        } else {
            $imageName = null; // Atau sesuaikan dengan nilai default jika tidak ada gambar yang diunggah
        }
        $data = [
            'nama_fasilitas' => $request->nama_fasilitas,
            'gambar' => $imageName,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan
        ];

        Fasilitas::create($data);

        return redirect()->back()->with('success', 'Data Berhasil Disimpan');
    }

    public function tampilfasilitas($id)
    {
        $fasilitas = Fasilitas::where('id', $id)->first();
        return view('fasilitas.tampil_fasilitas', compact('fasilitas'));
    }

    public function updatefasilitas($id)
    {
        $fasilitas = Fasilitas::where('id', $id)->first();
        return view('fasilitas.update_fasilitas', compact('fasilitas'));
    }


    public function update_fasilitas(Request $request, $id)
    {
        // Validasi fasilitas
        $request->validate([
            'nama_fasilitas' => 'required|string',
            'gambar' => 'image|mimes:jpeg,png,jpg|max:2048',
            'jumlah' => 'required|string',
            'keterangan' => 'required',
        ]);

        // Simpan gambar ke storage
        if ($request->hasFile('gambar')) {
            Storage::delete('public/gambar/' . $request->input('gambar_lama'));
            $image = $request->file('gambar');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('gambar'), $imageName);
        } else {
            $imageName = $request->input('gambar_lama'); // Atau sesuaikan dengan nilai default jika tidak ada gambar yang diunggah
        }
        $data = [
            'nama_fasilitas' => $request->nama_fasilitas,
            'gambar' => $imageName,
            'jumlah' => $request->jumlah,
            'keterangan' => $request->keterangan
        ];

        Fasilitas::find($id)->update($data);

        return redirect()->back()->with('success', 'Data Berhasil Diupdate');
    }


    public function hapusfasilitas($id)
    {
        $fasilitas = Fasilitas::findOrFail($id);
        // Hapus gambar terkait
        if ($fasilitas->gambar) {
            Storage::delete('public/gambar/' . $fasilitas->gambar);
        }

        // Hapus Data dari database
        $fasilitas->delete();
        return redirect('/fasilitas')->with('success', 'Data berhasil dihapus');
    }
}
