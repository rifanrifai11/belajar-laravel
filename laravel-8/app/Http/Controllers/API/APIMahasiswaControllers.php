<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;

class APIMahasiswaControllers extends Controller
{
    public function index() {

        $data = Mahasiswa::all();
        return \response()->json([
            'message' => "success",
            'data' => $data,
            'response' => 200
        ],200);
    }
}
