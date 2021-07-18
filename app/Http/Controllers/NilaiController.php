<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nilai;
use App\Mahasiswa;
use App\Makul;
use Alert;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::with('mahasiswa', 'makul')->get();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();

        return view('nilai.create', compact('mahasiswa', 'makul'));
    }

    public function store(Request $request)
    {
        Nilai::create($request->all());
        alert()->success('Sukses','Data Berhasil Disimpan');
        return redirect()->route('nilai');
    }
    
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::all();
        $makul = Makul::all();
        $nilai = Nilai::find($id);
        return view('nilai.edit', compact('nilai', 'mahasiswa', 'makul'));
    }

    public function update(Request $request, $id) 
    {
        $nilai = Nilai::find($id);
        $nilai->update($request->all());
        alert()->success('Sukses','Data Berhasil Diedit');
        return redirect()->route('nilai');
    }

    public function destroy($id)
    {
        $nilai = Nilai::find($id);
        $nilai->delete();
        alert()->success('Sukses','Data Berhasil Dihapus');
        return redirect()->route('nilai');
    }
}
