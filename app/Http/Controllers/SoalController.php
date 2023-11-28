<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SoalController extends Controller
{
    public function index() {
        return view('soal');
    }

    public function store(Request $request){


        return redirect('/data')->with('toast_success', 'Data berhasil di tambahkan');;
    }
}
