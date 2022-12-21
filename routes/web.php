<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;

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

/* Dashboard */

Route::redirect('/', '/login');

Route::get('/user/dashboard', [AuthController::class, 'dashboardUser'])->name('dashboard.user')->middleware(['auth', 'user']);
Route::get('/admin/dashboard', [AuthController::class, 'dashboardAdmin'])->name('dashboard.admin')->middleware(['auth', 'admin']);

Route::post('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('/signup-admin', [AuthController::class, 'showSignup'])->name('view.signup');

/* Autentikasi */
Route::get('/login', [AuthController::class, 'viewLogin'])->name('view.login')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

/* Buku */
Route::get('/buku', [BookController::class, 'viewDaftarBuku'])->name('view.buku')->middleware('auth');
Route::get('/buku/create', [BookController::class, 'viewTambahBuku'])->name('view.tambah.buku')->middleware(['auth', 'admin']);
Route::post('/buku/create', [BookController::class, 'tambahBuku'])->name('tambah.buku')->middleware(['auth', 'admin']);
Route::get('/buku/edit/{buku}', [BookController::class, 'viewEditBuku'])->name('view.edit.buku')->middleware(['auth', 'admin']);
Route::post('/buku/{buku}', [BookController::class, 'editBuku'])->name('edit.buku')->middleware(['auth', 'admin']);
Route::post('/buku/delete/{buku}', [BookController::class, 'hapusBuku'])->name('hapus.buku')->middleware(['auth', 'admin']);

Route::get('/pinjam', [BookController::class, 'viewPinjamBuku'])->name('view.pinjam.buku')->middleware('auth');
Route::post('/pinjam/{buku}', [BookController::class, 'pinjamBuku'])->name('pinjam.buku')->middleware(['auth', 'user']);

Route::get('/pengembalian', [BookController::class, 'viewPengembalianBuku'])->name('view.pengembalian.buku')->middleware('auth');

/** TERBARU */
Route::get('/admin/dashboard2', [BookController::class, 'viewDashboardAdmin2'])->name('view.dashboard2.admin')->middleware(['auth', 'admin']);
Route::get('/user/dashboard2', [BookController::class, 'viewDashboardUser2'])->name('view.dashboard2.user')->middleware(['auth', 'user']);
Route::get('/buku2', [BookController::class, 'viewDaftarBuku2'])->name('view.buku.2')->middleware('auth');
Route::get('/buku/create2', [BookController::class, 'viewTambahBuku2'])->name('view.tambah.buku.2')->middleware(['auth', 'admin']);
Route::get('/buku/edit2/{buku}', [BookController::class, 'viewEditBuku2'])->name('view.edit.buku.2')->middleware(['auth', 'admin']);
Route::get('/pinjam2', [BookController::class, 'viewPinjamBuku2'])->name('view.pinjam.buku.2')->middleware('auth');
Route::post('/pinjam2/{peminjaman}', [BookController::class, 'hapusPeminjaman'])->name('pinjam.buku.2')->middleware('auth');
Route::get('/pengembalian2', [BookController::class, 'viewPengembalianBuku2'])->name('view.pengembalian.buku.2')->middleware('auth');
Route::post('/pengembalian2/{pengembalian}', [BookController::class, 'pengembalianBuku'])->name('pengembalian.buku.2')->middleware('auth');
Route::post('hapuspengembalian/pengembalian2/{pengembalian}', [BookController::class, 'hapusPengembalian'])->name('hapuspengembalian.buku.2')->middleware('auth');

// Route Siswa
Route::get('/admin/siswa', [BookController::class, 'viewSiswa'])->name('view.siswa')->middleware('auth', 'admin');

Route::delete('/admin/{user}', [BookController::class, 'destroy'])->name('delete_siswa');