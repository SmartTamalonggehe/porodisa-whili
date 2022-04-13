<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\distrik;
use App\Models\kota;
use Illuminate\Http\Request;

class DistrikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $kota = kota::all();
        $distrik = distrik::all();
        return view('admin.distrik.index',[
            'kota' => $kota,
            'distrik' =>$distrik
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
        distrik::create([
            'kota_id' => $request->kota_id,
            'nm_distrik' => $request->nm_distrik
        ]);
        return redirect()->route('distrik.index');
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
        $kota = kota::all();
        $distrik = distrik::find($id);
        return view('admin.distrik.edit', [
            'distrik' => $distrik,
            'kota' => $kota
        ]);
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
        distrik::find($id)->update([
            'kota_id' => $request->kota_id,
            'nm_distrik' => $request->nm_distrik
        ]);
        return redirect()->route('distrik.index');
            // ->with('berhasil', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        distrik::destroy($id);
        return redirect()->route('distrik.index');
            // ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
