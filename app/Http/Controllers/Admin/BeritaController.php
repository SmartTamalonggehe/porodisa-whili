<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $berita = berita::all();
        return view('admin.berita.index', [
            'berita' =>$berita
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $ekstensi_gambar = $request->file('gambar')->extension();
        $nama_gambar = time() . '.' . $ekstensi_gambar;
        Storage::putFileAs('public/gambar', $request->gambar, $nama_gambar);

        berita::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'tgl' => $request->tgl,
            'gambar' => $nama_gambar
        ]);
        return redirect()->route('berita.index')
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
        
        $berita = berita::find($id);
        return view('admin.berita.details', [
            'berita' => $berita
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
        berita::destroy($id);
        return redirect()->route('berita.index')
            ->with('Data Berhasil Dihapus');
    }
}
