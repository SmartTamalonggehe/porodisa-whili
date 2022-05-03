<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\berita;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $berita = berita::all();
        return view('user.dashboard.index',[
            'berita'=> $berita
        ]);
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
        return view('user.dashboard.details', [
            'berita' => $berita
        ]);
    }

}
