<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\keuangan;
use Illuminate\Http\Request;

class KeuanganApi extends Controller
{
    public function index()
    {
        $data = keuangan::all();
        return response()->json($data);
    }
}
