<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckAuth extends Controller
{
    public function index()
    {
        $user = Auth::user();
        if ($user) {
            if ($user->hasRole('admin')) {
                return redirect()->route('admin');
            }
            if ($user->hasRole('pimpinan')) {
                return redirect()->route('pimpinan');
            }
        }
        return redirect()->route('login');
    }
}
