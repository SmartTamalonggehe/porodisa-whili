<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\anggota;
use App\Models\kelurahan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelurahan = kelurahan::all();
        $anggota = anggota::all();
        return view('user.anggota.index', [
            'kelurahan' => $kelurahan,
            'anggota' => $anggota
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        anggota::create([
            'no_penduduk' => $request->no_penduduk,
            'user_id' => Auth::user()->id,
            'nama' => $request->nama,
            'tempat' => $request->tempat,
            'tgl_lahir' => $request->tgl_lahir,
            'kelurahan_id' => $request->kelurahan_id,
            'agama' => $request->agama,
            'jenkel' => $request->jenkel,
            'pendidikan' => $request->pendidikan,
            'longitude' => $request->longitude,
            'latitude' => $request->latitude,
        ]);
        return redirect()->route('anggotaUser.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $anggota = anggota::find($id);
        return view('user.anggota.detail', [
            'anggota' => $anggota
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        anggota::destroy($id);
        return redirect()->route('anggotaUser.index')
            ->with('Data Berhasil Dihapus');
    }
}
