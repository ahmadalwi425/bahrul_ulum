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
Route::get('/berita', function() {
    return view('berita');
});
Route::get('/registrasi/{id}', [App\Http\Controllers\nonauthController::class, 'registrasi']);
Route::get('/feedback', [App\Http\Controllers\nonauthController::class, 'feedback']);
Route::post('/feedback/store', [App\Http\Controllers\nonauthController::class, 'feedbackStore']);

Auth::routes();
Route::get('/dashboard', [App\Http\Controllers\adminController::class, 'dashboard']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pendaftaran/tk', [App\Http\Controllers\pendaftaranController::class, 'indextk']);
Route::get('/pendaftaran/mts', [App\Http\Controllers\pendaftaranController::class, 'indexmts']);
Route::get('/pendaftaran/ma', [App\Http\Controllers\pendaftaranController::class, 'indexma']);
Route::get('/modal', [App\Http\Controllers\pendaftaranController::class, 'modal']);
Route::get('/menu/{id}', [App\Http\Controllers\nonauthController::class, 'indexMenu']);
Route::get('/berita/{id}', [App\Http\Controllers\nonauthController::class, 'indexBerita']);
Route::get('/listberita', [App\Http\Controllers\nonauthController::class, 'listBerita']);
Route::get('admin/pendaftaran/{id}', [App\Http\Controllers\adminController::class, 'showPendaftaran']);
Route::get('/siswa/{id}', [App\Http\Controllers\adminController::class, 'showSiswa']);
Route::get('/siswa/hapus/{id}', [App\Http\Controllers\adminController::class, 'hapusSiswa']);
Route::post('/pendaftaran/store', [App\Http\Controllers\pendaftaranController::class, 'store']);
Route::get('/admin/pendaftaran/diterima/{id}', [App\Http\Controllers\adminController::class, 'daftarTerima']);
Route::get('/admin/pendaftaran/ditolak/{id}', [App\Http\Controllers\adminController::class, 'daftarTolak']);
Route::get('/admin/lembaga/menu/{id}', [App\Http\Controllers\menuController::class, 'index']);
Route::get('/admin/lembaga/destroy/{id}', [App\Http\Controllers\lembagaController::class, 'destroy']);
Route::get('/admin/lembaga', [App\Http\Controllers\lembagaController::class, 'index']);
Route::get('/admin/lembaga/edit/{id}', [App\Http\Controllers\lembagaController::class, 'edit']);
Route::put('/admin/lembaga/update/{id}', [App\Http\Controllers\lembagaController::class, 'update']);
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
Route::get('/admin/program', [App\Http\Controllers\programController::class, 'index']);
Route::get('/admin/program/create', [App\Http\Controllers\programController::class, 'create']);
Route::post('/admin/program/store', [App\Http\Controllers\programController::class, 'store']);
Route::get('/admin/program/edit/{id}', [App\Http\Controllers\programController::class, 'edit']);
Route::put('/admin/program/update/{id}', [App\Http\Controllers\programController::class, 'update']);
Route::get('/admin/program/destroy/{id}', [App\Http\Controllers\programController::class, 'destroy']);
Route::get('/admin/kata_mereka', [App\Http\Controllers\kata_merekaController::class, 'index']);
Route::get('/admin/kata_mereka/verify/{id}', [App\Http\Controllers\kata_merekaController::class, 'verify']);
Route::get('/admin/kata_mereka/unverify/{id}', [App\Http\Controllers\kata_merekaController::class, 'unverify']);
Route::get('/admin/kata_mereka/destroy/{id}', [App\Http\Controllers\kata_merekaController::class, 'destroy']);
Route::get('/admin/banner', [App\Http\Controllers\bannerController::class, 'index']);
Route::get('/admin/banner/create', [App\Http\Controllers\bannerController::class, 'create']);
Route::post('/admin/banner/store', [App\Http\Controllers\bannerController::class, 'store']);
Route::get('/admin/banner/edit/{id}', [App\Http\Controllers\bannerController::class, 'edit']);
Route::put('/admin/banner/update/{id}', [App\Http\Controllers\bannerController::class, 'update']);
Route::get('/admin/banner/destroy/{id}', [App\Http\Controllers\bannerController::class, 'destroy']);
// // banner
// Route::get('/admin/banner', [App\Http\Controllers\adminController::class, 'banner']);

// // program kami
// // Route::get('/admin/program', [App\Http\Controllers\adminController::class, 'program']);