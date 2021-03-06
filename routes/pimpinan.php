
<?php

use App\Http\Controllers\Pimpinan\AnggotaPimpinanController;
use App\Http\Controllers\Pimpinan\DashboardController;
use App\Http\Controllers\Pimpinan\KeuanganPimpinanController;
use App\Http\Controllers\Pimpinan\PengurusPimpinanController;
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
//     return view('pimpinan.dashboard.index');
// })->name('pimpinan');

Route::prefix('pimpinan')->middleware('auth', 'role:pimpinan')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('pimpinan');
    Route::resource('anggotaPimpinan', AnggotaPimpinanController::class);
    Route::resource('kegiatanPimpinan', PengurusPimpinanController::class); 
    Route::resource('keuanganPimpinan', KeuanganPimpinanController::class); 
});
