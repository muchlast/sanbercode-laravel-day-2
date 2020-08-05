<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(){
        $namadepan = '';
        $namabelakang = '';
        return view('form', ['namad' => $namadepan, 'namab' => $namabelakang]);
        // return view('form');
    }

    public function selamat(Request $request){
        $namadepan = $request->input('namad');
        $namabelakang = $request->input('namab');
        return view('selamat', ['namad' => $namadepan, 'namab' => $namabelakang]);
    }
}
