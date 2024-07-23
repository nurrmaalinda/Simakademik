<?php

namespace App\Http\Controllers;

use App\Models\Raport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class RaportController extends Controller
{
    public function index()
    {
        $raport =Raport::all();
        return view('raport.index', compact('raport'));
    }

    public function create()
    {
        return view('raport.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_raport' => 'required',
            'id_siswa' => 'required',
            'nama' => 'required',
            'semester' => 'required',
            'tahun_ajaran' => 'required',
        ]);
        $data = $request->all();      
        Raport::create($data);

        return redirect()->route('raport.index')->with('success', 'Raport berhasil ditambahkan.');
    }

    public function edit(Raport $raport)
    {
        return view('raport.edit', compact('raport'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_raport' => 'required',
            'id_siswa' => 'required',
            'nama' => 'required',
            'semester' => 'required',
            'tahun_ajaran' => 'required',
        ]);

        $raport = Raport::findOrFail($id);
        $data = $request->all();

        $raport->update($data);

        return redirect()->route('raport.index')->with('success', 'Raport berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $raport = Raport::findOrFail($id);
        $raport->delete();
        return redirect()->route('raport.index')->with('success', 'Raport berhasil dihapus.');
    }
}
