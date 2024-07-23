<?php

namespace App\Http\Controllers;
use App\Models\Presensi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PresensiController extends Controller

{
    public function index()
    {
        $presensi = Presensi::all();
        return view('presensi.index', compact('presensi'));
    }

    public function create()
    {
        return view('presensi.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_siswa' => 'required',
            'nama' => 'required',
            'id_jadwal' => 'required',
            'tanggal' => 'required',
            'status' => 'nullable|in:Hadir,Izin','Sakit'
        ]);
        $data = $request->all();

        Presensi::create($data);

        return redirect()->route('presensi.index')->with('success', 'Presensi berhasil ditambahkan.');
    }

    public function edit(Presensi $presensi)
    {
        return view('presensi.edit', compact('presensi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_siswa' => 'required',
            'nama' => 'required',
            'id_jadwal' => 'required',
            'tanggal' => 'required',
            'status' => 'nullable|in:Hadir,Izin','Sakit'
        ]);

        $presensi= Presensi::findOrFail($id);
        $data = $request->all();

        $presensi->update($data);

        return redirect()->route('presensi.index')->with('success', 'Presensi berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $presensi = Presensi::findOrFail($id);

        $presensi->delete();

        return redirect()->route('presensi.index')->with('success', 'Presensi berhasil dihapus.');
    }
}

{
    //
}
