<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kegiatan = kegiatan::all();
        return view('admin.kegiatan.index',[
            'kegiatan' => $kegiatan
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

            $ekstensi_foto = $request->file('foto')->extension();
            $nama_foto = time() . '.' . $ekstensi_foto;
            Storage::putFileAs('public/kegiatan', $request->foto, $nama_foto);

        kegiatan::create([

            'keterangan' => $request->keterangan,
            'tgl' => $request->tgl,
            // 'foto' => $request->foto
            'foto' => $nama_foto

        ]);
        return redirect()->route('kegiatan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kegiatan = kegiatan::find($id);
        return view(
            'admin.kegiatan.edit',
            [
                'kegiatan' => $kegiatan
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
        Storage::putFileAs('public/kegiatan', $request->foto, $nama_foto);

        kegiatan::find($id)->update([
            'keterangan' => $request->keterangan,
            'tgl' => $request->tgl,
            'foto' => $nama_foto

        ]);
        return redirect()->route('kegiatan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        kegiatan::destroy($id);
        return redirect()->route('kegiatan.index');
            // ->with('Data Berhasil Dihapus');
    }
}
