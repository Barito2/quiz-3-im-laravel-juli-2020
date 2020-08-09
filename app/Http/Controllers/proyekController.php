<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class proyekController extends Controller
{
    public function create()
    {
        return view('proyek.create');
    }

    public function index()
    {
        return view('proyek.index');
    }

    public function store()
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
        ]);

        DB::table('pertanyaans')->insert([
            "judul" => $request['nama'],
            "isi" => $request['desk'],
        ]);

        return redirect('/pertanyaans')->with('success', 'Pertanyaan berhasil di simpan');
    }
}
