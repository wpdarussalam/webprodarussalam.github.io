<?php

namespace App\Http\Controllers;

use App\Models\User_prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProdiController extends Controller
{
    public function index()
    {
        $userprodi = User_prodi::get();
        return view('user_prodi.list_userprodi', compact('userprodi'));
    }

    public function tambah_prodi()
    {
        return view('user_prodi.tambah_userprodi');
    }

    // public function tambah_userprodi()
    // {
    //     return view('userprodi.tambah_userprodi');
    // }



    public function simpan_userprodi(Request $request)
    {
        // validasi User_prodi
        $validator = $request->validate([
            'username' => 'required|string|max:255',
            'nama_prodi' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);

        $data = [
            'username' => $request->username,
            'nama_prodi' => $request->nama_prodi,
            'password' => Hash::make($request->password),

        ];

        User_prodi::create($data);

        return redirect()->back()->with('success', 'Data Berhasil Disimpan');
    }

    public function tampil_userprodi($id)
    {
        $user_prodi = User_prodi::where('id', $id)->first();
        return view('userprodi.tampil_userprodi', compact('userprodi'));
    }

    public function update_userprodi($id)
    {
        $user_prodi = User_prodi::where('id', $id)->first();
        return view('userprodi.update_userprodi', compact('userprodi'));
    }

    public function update_user_prodi(Request $request, $id)
    {
        // Validasi fasilitas
        $request->validate([
            'username' => 'required|string',
            'nama_prodi' => 'required|string',
            'password' => 'required|string',

        ]);

        // Simpan gambar ke storage
        // if ($request->hasFile('gambar')) {
        //     Strong::delete('public/gambar/' . $request->input('gambar_lama'));
        //     $image = $request->file('gambar');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('gambar'), $imageName);
        // } else {
        //     $imageName = $request->input('gambar_lama'); // Atau sesuaikan dengan nilai default jika tidak ada gambar yang diunggah
        // }
        $data = [
            'username' => $request->username,
            'nama_prodi' => $request->nama_prodi,
            'password' => $request->password
            // 'gambar' => $imageName,
        ];

        User_prodi::find($id)->update($data);

        return redirect()->back()->with('success', 'Data Berhasil Diupdate');
    }

    public function hapus_userprodi($id)
    {
        $userprodi = User_prodi::findOrFail($id);
        // Hapus gambar terkait
        if ($userprodi->gambar) {
            Storage::delete('public/gambar/' . $userprodi->gambar);
        }

        // Hapus Data dari database
        $userprodi->delete();
        return redirect('/user_prodi')->with('success', 'Data berhasil dihapus');
    }
}
