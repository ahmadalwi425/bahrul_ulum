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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    $nav = 'dashboard';
    return view('admin.adminDashboard', compact('nav'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pendaftaran', [App\Http\Controllers\pendaftaranController::class, 'index']);
Route::get('admin/pendaftaran/{id}', [App\Http\Controllers\adminController::class, 'showPendaftaran']);
Route::get('/siswa/{id}', [App\Http\Controllers\adminController::class, 'showSiswa']);
Route::get('/siswa/hapus/{id}', [App\Http\Controllers\adminController::class, 'hapusSiswa']);
Route::post('/pendaftaran/store', [App\Http\Controllers\pendaftaranController::class, 'store']);
Route::get('/admin/pendaftaran/diterima/{id}', [App\Http\Controllers\adminController::class, 'daftarTerima']);
Route::get('/admin/pendaftaran/ditolak/{id}', [App\Http\Controllers\adminController::class, 'daftarTolak']);
Route::get('/admin/lembaga/menu/{id}', [App\Http\Controllers\menuController::class, 'index']);
Route::get('/admin/lembaga/destroy/{id}', [App\Http\Controllers\lembagaController::class, 'destroy']);
Route::get('/admin/lembaga', [App\Http\Controllers\lembagaController::class, 'index']);
Route::get('/admin/pendaftaran', [App\Http\Controllers\adminController::class, 'pendaftaran']);
Route::get('/admin/siswa', [App\Http\Controllers\adminController::class, 'siswa']);
Route::get('/admin/siswa/detail/{id}', [App\Http\Controllers\adminController::class, 'siswaDetail']);
Route::put('/admin/siswa/update/{id}', [App\Http\Controllers\adminController::class, 'siswaUpdate']);
Route::get('/admin/siswa/export', [App\Http\Controllers\adminController::class, 'exportSiswa']);
Route::post('/admin/siswa/import', [App\Http\Controllers\adminController::class, 'importSiswa']);
Route::post('/admin/menu/store', [App\Http\Controllers\menuController::class, 'store']);