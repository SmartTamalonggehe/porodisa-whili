<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\keuangan;
use Illuminate\Http\Request;

class KeuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keuangan = keuangan::all();
        return view('admin.keuangan.index',[
            'keuangan' =>$keuangan
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
        keuangan::create([
            'tgl' => $request->tgl,
            'keterangan' => $request->keterangan,
            'debet' => $request->debet,
            'kredit' => $request->kredit,
            'saldo' => $request->saldo
        ]);
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
        keuangan::find($id)->update([
            'tgl' => $request->tgl,
            'keterangan' => $request->keterangan,
            'debet' => $request->debet,
            'kredit' => $request->kredit,
            'saldo' => $request->saldo
        ]);
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
        keuangan::destroy($id);
        return redirect()->route('keuangan.index');
    }
}
