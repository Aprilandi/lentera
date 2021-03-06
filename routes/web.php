<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\GurusesController;
use App\Http\Controllers\SiswasController;
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
    return view('admin.login.index', ['title' => 'Halaman Login']);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        'title' => 'Halaman Dashboard',
        'page' => 'Dashboard'
    ]);
})->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::middleware('admin')->group(function () {
        // Route::resource('/akun', UserController::class);
        // Route::resource('/role', RolesController::class);
        Route::resource('/guru', GurusesController::class);
        Route::resource('/siswa', SiswasController::class);
        // Route::resource('/pekerjaan', PekerjaansController::class);
        // Route::resource('/riwayat', RiwayatsController::class);
    });
    Route::middleware('guru')->group(function () {
        // Route::resource('/pekerjaan', PekerjaansController::class);
        // Route::resource('/riwayat', RiwayatsController::class);
    });
});
