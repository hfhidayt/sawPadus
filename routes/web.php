<?php

use App\Models\Hitung;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\HitungController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DetailHitungController;
use App\Http\Controllers\HasilController;
use App\Http\Controllers\ProfilController;
use App\Models\Kriteria;
use App\Models\Nilai;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Dashboard | PADUS UTDI',
        'kriterias' => Kriteria::all(),
        'nilais' => Nilai::Where('user_id', auth()->user()->id)->get(),
        'perhitungans' => Hitung::Where('user_id', auth()->user()->id)->get()
    ]);
})->middleware('auth');

Route::resource('/dashboard/akun', UserController::class)->middleware('admin');
Route::resource('/dashboard/kriteria', KriteriaController::class)->middleware('admin');
Route::resource('/dashboard/nilai', NilaiController::class)->middleware('admin');
Route::resource('/dashboard/hitung', HitungController::class)->middleware('admin');
Route::resource('/dashboard/detail', DetailHitungController::class)->middleware('admin');
Route::resource('/dashboard/hasil', HasilController::class)->middleware('ketua');
Route::resource('/dashboard/profil', ProfilController::class)->middleware('anggota');