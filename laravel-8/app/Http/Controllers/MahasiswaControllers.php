<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaControllers extends Controller
{
    public function index() {
        return view('mahasiswa.mahasiswa');
    }
}
