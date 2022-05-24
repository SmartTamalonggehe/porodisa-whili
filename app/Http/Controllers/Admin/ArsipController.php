<?php

namespace App\Http\Controllers\Admin;

use App\Models\Arsip;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ArsipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arsip = Arsip::all();
        return view('admin.arsip.index', [
            'arsip' => $arsip
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
        // validation rules
        $rules = [
            'nm_arsip' => 'required|string|max:50',
            'file_arsip' => 'required|max:2048',
        ];
        // validation custom messages
        $messages = [
            'nm_arsip.required' => 'Nama Arsip harus diisi.',
            'nm_arsip.string' => 'Nama Arsip harus berupa string.',
            'nm_arsip.max' => 'Nama Arsip maksimal 50 karakter.',
            'file_arsip.required' => 'File Arsip harus diisi.',
            'file_arsip.max' => 'File Arsip maksimal 2048 karakter.',
        ];
        // validation
        $this->validate($request, $rules, $messages);

        $ekstensi_file_arsip = $request->file('file_arsip')->extension();
        $nama_file_arsip = time() . '.' . $ekstensi_file_arsip;
        Storage::putFileAs('public/arsip', $request->file_arsip, $nama_file_arsip);
        $data['file_arsip'] = $nama_file_arsip;

        Arsip::create($data);
        return redirect()->route('arsip.index')
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
        $arsip = Arsip::findOrFail($id);
        return view('admin.arsip.edit', [
            'arsip' => $arsip
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
        $data = $request->all();
        // validation rules
        $rules = [
            'nm_arsip' => 'required|string|max:50',
            'file_arsip' => 'max:2048',
        ];
        // validation custom messages
        $messages = [
            'nm_arsip.required' => 'Nama Arsip harus diisi.',
            'nm_arsip.string' => 'Nama Arsip harus berupa string.',
            'nm_arsip.max' => 'Nama Arsip maksimal 50 karakter.',
            'file_arsip.max' => 'File Arsip maksimal 2048 karakter.',
        ];
        // validation
        $this->validate($request, $rules, $messages);

        $arsip = Arsip::findOrFail($id);

        if ($request->hasFile('file_arsip')) {
            // delete file
            Storage::delete('public/arsip/' . $arsip->file_arsip);
            # code...
            $ekstensi_file_arsip = $request->file('file_arsip')->extension();
            $nama_file_arsip = time() . '.' . $ekstensi_file_arsip;
            Storage::putFileAs('public/arsip', $request->file_arsip, $nama_file_arsip);
        } else {
            $nama_file_arsip = $request->file_arsip;
        }
        $data['file_arsip'] = $nama_file_arsip;

        $arsip->update($data);
        return redirect()->route('arsip.index')
            ->with('berhasil', 'Data Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $arsip = Arsip::findOrFail($id);
        // delete file
        Storage::delete('public/arsip/' . $arsip->file_arsip);
        $arsip->delete();
        return redirect()->route('arsip.index')
            ->with('berhasil', 'Data Berhasil Dihapus');
    }
}
