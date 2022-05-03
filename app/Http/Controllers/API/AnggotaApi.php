<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\anggota;
use Illuminate\Http\Request;

class AnggotaApi extends Controller
{
    public function index()
    {
        $data = anggota::with('kelurahan')->get();
        return response()->json($data);
    }
}
