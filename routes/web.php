<?php

use App\Http\Controllers\User\AnggotaController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\UserKegiatanController;
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
    return redirect()->route('cekAuth');
});

// Route::get('/dashboard', DashboardController::class,)->name('anggota');
Route::resource('anggota', AnggotaController::class);
Route::resource('kegiatanUser', UserKegiatanController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/pimpinan.php';
