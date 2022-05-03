<?php

use App\Http\Controllers\User\AnggotaController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\User\PengurusCOntroller;
use App\Http\Controllers\User\UserKegiatanController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
//     return view('user.dashboard.index');
// })->name('anggota');


Route::middleware('auth', 'role:anggota')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('anggota');
    Route::resource('anggota', DashboardController::class);
    Route::resource('anggotaUser', AnggotaController::class);
    Route::resource('kegiatanUser', UserKegiatanController::class);
    Route::resource('pengurusUser', PengurusCOntroller::class);
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
require __DIR__ . '/pimpinan.php';
