<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pengurus = pengurus::all();
        return view('admin.pengurus.index',[
            'pengurus' =>$pengurus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pengurus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $ekstensi_foto = $request->file('foto')->extension();
        $nama_foto = time() . '.' . $ekstensi_foto;
        Storage::putFileAs('public/pengurus', $request->foto, $nama_foto);

        pengurus::create([
            'no_penduduk' => $request->no_penduduk,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'jenkel' => $request->jenkel,
            'tempat' => $request->tempat,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            // 'foto' => $request->foto,
            'foto' => $nama_foto

        ]);
        return redirect()->route('pengurus.index')
         ->with('berhasil', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $pengurus = pengurus::find($id);
        return view('admin.pengurus.details', [
            'pengurus' => $pengurus
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
        $pengurus = pengurus::find($id);
        return view(
            'admin.pengurus.edit',
            [
                'pengurus' => $pengurus
            ]
        );
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
        $ekstensi_foto = $request->file('foto')->extension();
        $nama_foto = time() . '.' . $ekstensi_foto;
        Storage::putFileAs('public/pengurus', $request->foto, $nama_foto);

        pengurus::find($id)->update([
            'no_penduduk' => $request->no_penduduk,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'jenkel' => $request->jenkel,
            'tempat' => $request->tempat,
            'tgl_lahir' => $request->tgl_lahir,
            'agama' => $request->agama,
            'pendidikan' => $request->pendidikan,
            'pekerjaan' => $request->pekerjaan,
            'foto' => $nama_foto
        ]);
        return redirect()->route('pengurus.index')
        ->with('berhasil', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        pengurus::destroy($id);
        return redirect()->route('pengurus.index')
            ->with('Data Berhasil Dihapus');
    }
}
