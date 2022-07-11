<?php

namespace App\Http\Controllers\Admin;

use App\Models\keuangan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KeuanganController extends Controller
{
    private function validation($request)
    {
        $request->validate([
            'tgl' => 'required',
            'keterangan' => 'required',
            'debet' => 'required',
            'kredit' => 'required',
            'saldo' => 'required',
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keuangan = keuangan::all();
        return view('admin.keuangan.index', [
            'keuangan' => $keuangan
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
        $data = $request->all();

        $this->validation($request);
        $ekstensi_kwitansi = $request->file('kwitansi')->extension();
        $nama_kwitansi = time() . '.' . $ekstensi_kwitansi;
        Storage::putFileAs('public/kwitansi', $request->kwitansi, $nama_kwitansi);
        $data['kwitansi'] = $nama_kwitansi;

        // validation not success then return back
        keuangan::create($data);
        return redirect()->route('keuangan.index');
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
        $keuangan = keuangan::find($id);
        return view(
            'admin.keuangan.edit',
            [
                'keuangan' => $keuangan
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
        $kwitansi = keuangan::findOrFail($id);

        if ($request->hasFile('kwitansi')) {
            // delete file
            Storage::delete('public/kwitansi/' . $kwitansi->kwitansi);
            # code...
            $ekstensi_kwitansi = $request->file('kwitansi')->extension();
            $nama_kwitansi = time() . '.' . $ekstensi_kwitansi;
            Storage::putFileAs('public/kwitansi', $request->kwitansi, $nama_kwitansi);
        } else {
            $nama_kwitansi = $kwitansi->kwitansi;
        }
        $data['kwitansi'] = $nama_kwitansi;

        $kwitansi->update($data);
        return redirect()->route('keuangan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kwitansi = keuangan::findOrFail($id);
        // delete file
        Storage::delete('public/kwitansi/' . $kwitansi->kwitansi);
        $kwitansi->delete();
        return redirect()->route('keuangan.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
