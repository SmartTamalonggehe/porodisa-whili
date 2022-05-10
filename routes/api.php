<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AnggotaApi;
use App\Http\Controllers\API\KeuanganApi;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// route anggotaApi
Route::get('anggota', [AnggotaApi::class, 'index'])->name('api.anggota');
// route keuanganApi
Route::get('keuangan', [KeuanganApi::class, 'index'])->name('api.keuangan');
