<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\Kepala_cbtController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::controller(UserController::class)->group(function () {
    Route::get('user', 'user')->name('user');
    Route::get('login', 'login')->name('login');
    Route::post('login_action', 'login_action')->name('masuk');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(FasilitasController::class)->prefix('fasilitas')->group(function () {
    Route::get('', 'index')->name('fasilitas');
    Route::get('tambah_fasilitas', 'tambah_fasilitas')->name('fasilitas.tambah');
    Route::post('tambah_fasilitas', 'simpan_fasilitas')->name('fasilitas.simpan_fasilitas');
    Route::get('tampilfasilitas/{id}', 'tampilfasilitas')->name('fasilitas.tampilfasilitas');
    Route::post('tampilfasilitas/{id}', 'update_fasilitas')->name('fasilitas.fasilitas_update');
    Route::get('hapus/{id}', 'hapusfasilitas')->name('fasilitas.hapus');
});


Route::get('/reg', function () {
    return view('reg');
})->name('reg');

Route::controller(ProdiController::class)->prefix('prodi')->group(function () {
    Route::get('', 'index')->name('prodi');
    Route::get('tambah_prodi', 'tambah_prodi')->name('prodi.tambah');
    Route::post('tambah_prodi', 'simpan_userprodi')->name('prodi.simpan_prodi');
    Route::get('tampilprodi/{id}', 'tampilprodi')->name('prodi.tampilprodi');
    Route::post('tampilprodi/{id}', 'update_prodi')->name('prodi.prodi_update');
    Route::get('hapus/{id}', 'hapusprodi')->name('prodi.hapus');
});



Route::controller(AdminController::class)->prefix('admin')->group(function () {
    // Route::get('/', 'index')->name('admin');
    Route::get('daftar', 'tambah_admin')->name('admin.tambah_admin');
    Route::post('tambah_admin', 'simpan_admin')->name('admin.simpan_admin');
    Route::get('tampiladmin/{id}', 'tampiladmin')->name('admin.tampiladmin');
    Route::post('tampiladmin/{id}', 'update_admin')->name('admin.admin_update');
    Route::get('hapus/{id}', 'hapusadmin')->name('admin.hapus');
});

Route::controller(Kepala_cbtController::class)->prefix('kepala_cbt')->group(function () {
    Route::get('', 'index')->name('kepala_cbt');
    Route::get('tambah_kepala_cbt', 'tambah_kepala_cbt')->name('kepala_cbt.tambah');
    Route::post('tambah_kepala_cbt', 'simpan_kepala_cbt')->name('kepala_cbt.simpan_kepala_cbt');
    Route::get('tampilkepala_cbt/{id}', 'tampilkepala_cbt')->name('kepala_cbt.tampilkepala_cbt');
    Route::post('tampilkepala_cbt/{id}', 'update_kepala_cbt')->name('kepala_cbt.kepala_cbt_update');
    Route::get('hapus/{id}', 'hapuskepala_cbt')->name('kepala_cbt.hapus');
});

Route::controller(PeminjamanController::class)->prefix('peminjaman')->group(function () {
    Route::get('', 'index')->name('peminjaman');
    Route::get('tambah_peminjaman', 'tambah_peminjaman')->name('peminjaman.tambah');
    Route::get('tambah_peminjaman_eksternal', 'tambah_peminjaman_eksternal')->name('peminjaman.tambah_eksternal');
    Route::post('tambah_peminjaman', 'simpan_peminjaman')->name('peminjaman.simpan_peminjaman');
    Route::get('detail_internal/{id}', 'TampilDetilInternal')->name('peminjaman.detailInternal');
    Route::post('detail_internal/{id}', 'simpanPinjamanInternal')->name('peminjaman.simpanDetailPinjaman');
    Route::get('tampilpeminjaman/{id}', 'tampilpeminjaman')->name('peminjaman.tampilpeminjaman');
    Route::post('tampilpeminjaman/{id}', 'update_peminjaman')->name('peminjaman.peminjaman_update');
    Route::get('hapus/{id}', 'hapuspeminjaman')->name('peminjaman.hapus');
    Route::get('peminjaman_external', 'peminjaman_external')->name('peminjaman.external');
    Route::get('detail_external/{id}', 'TampilDetilEksternal')->name('peminjaman.detailExternal');
    Route::post('detail_external/{id}', 'simpanPinjamanEksternal')->name('peminjaman.simpanPinjamanEksternal');
    // Route::post('detail_external/{id}', 'simpanPinjamanExternal')->name('peminjaman.simpanDetailPinjaman');
});

// Route::group(['middleware' =>['auth', 'ceklevel:admin,user']] ) function ( {
    
// });
