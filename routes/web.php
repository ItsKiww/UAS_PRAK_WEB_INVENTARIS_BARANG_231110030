<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\KategoriBarangController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\PemasokController;
use App\Http\Controllers\StokAdjustmentController;
use App\Http\Controllers\LogAktivitasController;
use App\Http\Controllers\akunInventarisController;

Route::get('/', function () {
    return view('inventaris.login.login');
});


Route::resource('barang', BarangController::class);
Route::resource('pengguna', PenggunaController::class);
Route::resource('kategori-barang', KategoriBarangController::class);
Route::resource('barang-masuk', BarangMasukController::class);
Route::resource('barang-keluar', BarangKeluarController::class);
Route::resource('pemasok', PemasokController::class);
Route::resource('stok-adjustment', StokAdjustmentController::class);
Route::resource('log-aktivitas', LogAktivitasController::class);


Route::get('/daftar', [akunInventarisController::class, 'daftarPage']);
Route::get('/dashboard', [akunInventarisController::class, 'dashboard']);


Route::post('/daftar', [akunInventarisController::class, 'daftarPost']);
Route::post('/masuk', [akunInventarisController::class, 'masukPost']);