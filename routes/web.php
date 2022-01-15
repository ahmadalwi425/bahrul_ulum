<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\nonauthController::class, 'index']);
Route::get('/registrasi', [App\Http\Controllers\nonauthController::class, 'registrasi']);
Route::get('/feedback', [App\Http\Controllers\nonauthController::class, 'feedback']);
Route::post('/feedback/store', [App\Http\Controllers\nonauthController::class, 'feedbackStore']);

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\adminController::class, 'dashboard']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pendaftaran', [App\Http\Controllers\pendaftaranController::class, 'index']);
Route::get('/modal', [App\Http\Controllers\pendaftaranController::class, 'modal']);
Route::get('/menu/{id}', [App\Http\Controllers\nonauthController::class, 'indexMenu']);
Route::get('/berita/{id}', [App\Http\Controllers\nonauthController::class, 'indexBerita']);
Route::get('admin/pendaftaran/{id}', [App\Http\Controllers\adminController::class, 'showPendaftaran']);
Route::get('/siswa/{id}', [App\Http\Controllers\adminController::class, 'showSiswa']);
Route::get('/siswa/hapus/{id}', [App\Http\Controllers\adminController::class, 'hapusSiswa']);
Route::post('/pendaftaran/store', [App\Http\Controllers\pendaftaranController::class, 'store']);
Route::get('/admin/pendaftaran/diterima/{id}', [App\Http\Controllers\adminController::class, 'daftarTerima']);
Route::get('/admin/pendaftaran/ditolak/{id}', [App\Http\Controllers\adminController::class, 'daftarTolak']);
Route::get('/admin/lembaga/menu/{id}', [App\Http\Controllers\menuController::class, 'index']);
Route::get('/admin/lembaga/destroy/{id}', [App\Http\Controllers\lembagaController::class, 'destroy']);
Route::get('/admin/lembaga', [App\Http\Controllers\lembagaController::class, 'index']);
Route::get('/admin/lembaga/create', [App\Http\Controllers\lembagaController::class, 'create']);
Route::post('/admin/lembaga/store', [App\Http\Controllers\lembagaController::class, 'store']);
Route::get('/admin/pendaftaran', [App\Http\Controllers\adminController::class, 'pendaftaran']);
Route::get('/admin/siswa', [App\Http\Controllers\adminController::class, 'siswa']);
Route::get('/admin/siswa/detail/{id}', [App\Http\Controllers\adminController::class, 'siswaDetail']);
Route::put('/admin/siswa/update/{id}', [App\Http\Controllers\adminController::class, 'siswaUpdate']);
Route::get('/admin/siswa/export', [App\Http\Controllers\adminController::class, 'exportSiswa']);
Route::post('/admin/siswa/import', [App\Http\Controllers\adminController::class, 'importSiswa']);
Route::get('/admin/menu/create', [App\Http\Controllers\menuController::class, 'create']);
Route::get('/admin/menu/edit/{id}', [App\Http\Controllers\menuController::class, 'edit']);
Route::get('/admin/menu/destroy/{id}', [App\Http\Controllers\menuController::class, 'destroy']);
Route::post('/admin/menu/store', [App\Http\Controllers\menuController::class, 'store']);
Route::put('/admin/menu/update/{id}', [App\Http\Controllers\menuController::class, 'update']);
Route::get('/admin/berita', [App\Http\Controllers\beritaController::class, 'index']);
Route::get('/admin/berita/create', [App\Http\Controllers\beritaController::class, 'create']);
Route::post('/admin/berita/store', [App\Http\Controllers\beritaController::class, 'store']);
Route::get('/admin/berita/edit/{id}', [App\Http\Controllers\beritaController::class, 'edit']);
Route::put('/admin/berita/update/{id}', [App\Http\Controllers\beritaController::class, 'update']);
Route::get('/admin/berita/destroy/{id}', [App\Http\Controllers\beritaController::class, 'destroy']);
Route::get('/admin/kata_mereka', [App\Http\Controllers\kata_merekaController::class, 'index']);
Route::get('/admin/kata_mereka/verify/{id}', [App\Http\Controllers\kata_merekaController::class, 'verify']);
Route::get('/admin/kata_mereka/unverify/{id}', [App\Http\Controllers\kata_merekaController::class, 'unverify']);
Route::get('/admin/kata_mereka/destroy/{id}', [App\Http\Controllers\kata_merekaController::class, 'destroy']);