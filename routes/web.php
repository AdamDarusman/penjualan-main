<?php

use App\Models\Paket_Wisata;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ReservasiController;
use App\Http\Controllers\PenginapanController;
use App\Http\Controllers\Obyek_WisataController;
use App\Http\Controllers\Paket_WisataController;
use App\Http\Controllers\Kategori_BeritaController;
use App\Http\Controllers\Kategori_WisataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::controller(AuthController::class)->group(function () {
	Route::get('register', 'register')->name('register');
	Route::post('register', 'registerSimpan')->name('register.simpan');

	Route::get('login', 'login')->name('login');
	Route::post('login', 'loginAksi')->name('login.aksi');

	Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::get('/', function () {
    $paketWisata = Paket_Wisata::all();
	return view('welcome', [
        'paketWisata' => $paketWisata
    ]);
});

Route::get('/detail/{id}', [Paket_WisataController::class, 'show'])->name('detail');

Route::middleware('auth')->group(function () {
	Route::get('dashboard', function () {
		return view('dashboard');
	})->name('dashboard');

	Route::controller(BarangController::class)->prefix('barang')->group(function () {
		Route::get('', 'index')->name('barang');
		Route::get('tambah', 'tambah')->name('barang.tambah');
		Route::post('tambah', 'simpan')->name('barang.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('barang.edit');
		Route::post('edit/{id}', 'update')->name('barang.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('barang.hapus');
	});

	Route::controller(KategoriController::class)->prefix('kategori')->group(function () {
		Route::get('', 'index')->name('kategori');
		Route::get('tambah', 'tambah')->name('kategori.tambah');
		Route::post('tambah', 'simpan')->name('kategori.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('kategori.edit');
		Route::post('edit/{id}', 'update')->name('kategori.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('kategori.hapus');
	});

	Route::controller(UserController::class)->prefix('user')->group(function () {
		Route::get('', 'index')->name('user');
		Route::get('tambah', 'tambah')->name('user.tambah');
		Route::post('tambah', 'simpan')->name('user.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('user.edit');
		Route::post('edit/{id}', 'update')->name('user.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('user.hapus');
	});

	Route::controller(PelangganController::class)->prefix('pelanggan')->group(function () {
		Route::get('', 'index')->name('pelanggan');
		Route::get('tambah', 'tambah')->name('pelanggan.tambah');
		Route::post('tambah', 'simpan')->name('pelanggan.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('pelanggan.edit');
		Route::post('edit/{id}', 'update')->name('pelanggan.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('pelanggan.hapus');
	});

	Route::controller(Kategori_WisataController::class)->prefix('kategori_wisata')->group(function () {
		Route::get('', 'index')->name('kategori_wisata');
		Route::get('tambah', 'tambah')->name('kategori_wisata.tambah');
		Route::post('tambah', 'simpan')->name('kategori_wisata.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('kategori_wisata.edit');
		Route::post('edit/{id}', 'update')->name('kategori_wisata.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('kategori_wisata.hapus');
	});

	Route::controller(Kategori_BeritaController::class)->prefix('kategori_berita')->group(function () {
		Route::get('', 'index')->name('kategori_berita');
		Route::get('tambah', 'tambah')->name('kategori_berita.tambah');
		Route::post('tambah', 'simpan')->name('kategori_berita.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('kategori_berita.edit');
		Route::post('edit/{id}', 'update')->name('kategori_berita.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('kategori_berita.hapus');
	});

	Route::controller(Obyek_WisataController::class)->prefix('obyek_wisata')->group(function () {
		Route::get('', 'index')->name('obyek_wisata');
		Route::get('tambah', 'tambah')->name('obyek_wisata.tambah');
		Route::post('tambah', 'simpan')->name('obyek_wisata.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('obyek_wisata.edit');
		Route::post('edit/{id}', 'update')->name('obyek_wisata.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('obyek_wisata.hapus');
	});

	Route::controller(PenginapanController::class)->prefix('penginapan')->group(function () {
		Route::get('', 'index')->name('penginapan');
		Route::get('tambah', 'tambah')->name('penginapan.tambah');
		Route::post('tambah', 'simpan')->name('penginapan.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('penginapan.edit');
		Route::post('edit/{id}', 'update')->name('penginapan.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('penginapan.hapus');
	});

	Route::controller(BeritaController::class)->prefix('berita')->group(function () {
		Route::get('', 'index')->name('berita');
		Route::get('tambah', 'tambah')->name('berita.tambah');
		Route::post('tambah', 'simpan')->name('berita.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('berita.edit');
		Route::post('edit/{id}', 'update')->name('berita.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('berita.hapus');
	});

	Route::controller(KaryawanController::class)->prefix('karyawan')->group(function () {
		Route::get('', 'index')->name('karyawan');
		Route::get('tambah', 'tambah')->name('karyawan.tambah');
		Route::post('tambah', 'simpan')->name('karyawan.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('karyawan.edit');
		Route::post('edit/{id}', 'update')->name('karyawan.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('karyawan.hapus');
	});

	Route::controller(Paket_WisataController::class)->prefix('paket_wisata')->group(function () {
		Route::get('', 'index')->name('paket_wisata');
		Route::get('tambah', 'tambah')->name('paket_wisata.tambah');
		Route::post('tambah', 'simpan')->name('paket_wisata.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('paket_wisata.edit');
		Route::post('edit/{id}', 'update')->name('paket_wisata.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('paket_wisata.hapus');
	});

    Route::controller(ReservasiController::class)->prefix('reservasi')->group(function () {
		Route::get('', 'index')->name('reservasi');
		Route::get('tambah', 'tambah')->name('reservasi.tambah');
		Route::post('tambah', 'simpan')->name('reservasi.tambah.simpan');
		Route::get('edit/{id}', 'edit')->name('reservasi.edit');
		Route::post('edit/{id}', 'update')->name('reservasi.tambah.update');
		Route::get('hapus/{id}', 'hapus')->name('reservasi.hapus');
        Route::get('/reservasi/cetak_pdf', 'cetak_pdf')->name('cetakReser');
	});


});
