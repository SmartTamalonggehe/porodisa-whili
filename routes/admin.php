
<?php

use App\Http\Controllers\Admin\AnggotaController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DistrikController;
use App\Http\Controllers\Admin\KegiatanController;
use App\Http\Controllers\Admin\KelurahanController;
use App\Http\Controllers\Admin\KeuanganController;
use App\Http\Controllers\Admin\KotaController;
use App\Http\Controllers\Admin\PengurusController;
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

// Route::get('/', function () {
//     return view('admin.dashboard.index');
// })->name('admin');

Route::prefix('admin')->middleware('auth', 'role:admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin');
    Route::resource('kota', KotaController::class);
    Route::resource('distrik', DistrikController::class);
    Route::resource('kelurahan', KelurahanController::class);
    Route::resource('pengurus', PengurusController::class);
    Route::resource('keuangan', KeuanganController::class);
    Route::resource('kegiatan', KegiatanController::class);

    Route::resource('anggotaAdmin', AnggotaController::class);
});
