<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaControllers extends Controller
{
//    public function index() {
//        $mahasiswa = Mahasiswa::all();
//        return view('mahasiswa.mahasiswa', compact('mahasiswa'));
//    }

//    public function store(Request $request) {
//        $input = Mahasiswa::create([
//            'nama' => $request['nama'],
//            'nim' => $request['nim'],
//            'kontak' => $request['kontak']
//        ]);
//
//        $input->save();
//        return redirect(route('mahasiswa.index'));
//    }

//    public function edit($id) {
//        $data = Mahasiswa::findOrFail($id);
//        return view('mahasiswa.mahasiswa-edit', compact('data'));
//    }

//    public function update(Request $request, $id) {
//        Mahasiswa::whereId($id)->update([
//            'nama' => $request['nama'],
//            'nim' => $request['nim'],
//            'kontak' => $request['kontak']
//        ]);
//        return redirect(route('mahasiswa.index'));
//    }

//    public function destroy($id) {
//        $data = Mahasiswa::findOrFail($id);
//        $data->delete();
//        return redirect(route('mahasiswa.index'));
//    }
}
