<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Admin::get();
        return view('admin.admin', compact('admin'));
    }

    public function tambah_admin()
    {
        return view('admin.tambah_admin');
    }


    public function simpan_admin(Request $request)
    {
        // Validasi fasilitas
        $request->validate([
            'nama' => 'required|string|max:255',
            'user_name' => 'required|string|max:255',
            'password' => 'required|string|min:6',
        ]);


        $data = [
            'nama' => $request->nama,
            'user_name' => $request->user_name,
            'password' => Hash::make($request->password),
        ];

        Admin::create($data);

        return redirect()->back()->with('success', 'Data Berhasil Disimpan');
    }

    public function tampil_admin($id)
    {
        $admin = Admin::where('id', $id)->first();
        return view('admin.tampil_admin', compact('admin'));
    }

    public function update_admin($id)
    {
        $admin = Admin::where('id', $id)->first();
        return view('admin.update_admin', compact('admin'));
    }


    public function updateadmin(Request $request, $id)
    {
        // Validasi fasilitas
        $request->validate([
            'nama' => 'required|string',
            'user_name' => 'required|string',
            'password' => 'required',
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
            'nama' => $request->nama,
            'user_name' => $request->user_name,
            'password' => $request->password
        ];

        Admin::find($id)->update($data);

        return redirect()->back()->with('success', 'Data Berhasil Diupdate');
    }


    public function hapusadmin($id)
    {
        $admin = Admin::findOrFail($id);
        // Hapus gambar terkait
        if ($admin->gambar) {
            Storage::delete('public/gambar/' . $admin->gambar);
        }

        // Hapus Data dari database
        $admin->delete();
        return redirect('/admin')->with('success', 'Data berhasil dihapus');
    }
}
