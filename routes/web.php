<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\TransaksiController;

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
//Halaman Home
Route::get('/', function () {
    return view('home');
});
Route::post('/contact', [PesanController::class, 'store'])->name('contact.store');
// Halaman Order
Route::resource('pages/order', OrderController::class);
Route::resource('pages/pelanggan', PelangganController::class);
Route::get('pelanggan/cetak/{id}', [PelangganController::class, 'cetak'])->name('pelanggan.cetak');
// Login
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
//Administrator
Route::middleware(['auth.redirect'])->group(function () {
    //Route Dasboard
    Route::get('/administrator', [AdminController::class, 'index']);
    //Route Transaksi
    Route::get('/administrator/transaksi', [TransaksiController::class, 'index'])->name('transaksi.index');
    Route::get('/tanggapi/{id}', [TransaksiController::class, 'tanggapi'])->name('transaksi.tanggapi');
    Route::put('/tanggapi/{id}', [TransaksiController::class, 'update'])->name('transaksi.update');
    Route::get('/cetak-laporan', [TransaksiController::class, 'cetakLaporan'])->name('cetak.laporan');
    //Route Layanan
    Route::get('/administrator/layanan', [LayananController::class, 'index'])->name('layanan.index');
    Route::get('/administrator/tambah', [LayananController::class, 'create'])->name('layanan.tambah');
    Route::post('/layanan/store', [LayananController::class, 'store'])->name('layanan.store');
    Route::get('/layanan/{id}/edit', [LayananController::class, 'edit'])->name('layanan.edit');
    Route::put('/layanan/{id}', [LayananController::class, 'update'])->name('layanan.update');
    Route::delete('/layanan/{id}', [LayananController::class, 'destroy'])->name('layanan.destroy');
    //Route Pesan
    Route::get('/administrator/pesan', [LayananController::class, 'show'])->name('layanan.pesan');
    Route::delete('/pesan/{id}', [LayananController::class, 'hapus'])->name('pesan.hapus');
    //Route Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
