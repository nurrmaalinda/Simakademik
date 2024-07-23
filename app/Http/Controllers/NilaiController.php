<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NilaiController extends Controller
{
    public function index()
    {
        $nilai = Nilai::all();
        return view('nilai.index', compact('nilai'));
    }

    public function create()
    {
        return view('nilai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_nilai' => 'required',
            'mata_pelajaran' => 'required',
            'nilai' => 'required',
        ]);
        $data = $request->all();


        Nilai::create($data);

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil ditambahkan.');
    }

    public function edit(Nilai $nilai)
    {
        return view('nilai.edit', compact('nilai'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_nilai' => 'required',
            'mata_pelajaran' => 'required',
            'nilai' => 'required',
        ]);

        $nilai = Nilai::findOrFail($id);
        $data = $request->all();


        $nilai->update($data);

        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $nilai = Nilai::findOrFail($id);
        $nilai->delete();
        return redirect()->route('nilai.index')->with('success', 'Nilai berhasil dihapus.');
    }
}
