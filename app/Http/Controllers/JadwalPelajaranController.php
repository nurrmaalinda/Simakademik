<?php

namespace App\Http\Controllers;

use App\Models\JadwalPelajaran;
use Illuminate\Http\Request;

class JadwalPelajaranController extends Controller
{
    public function index()
    {
        $jadwal_pelajaran = JadwalPelajaran::all();
        return view('jadwalpelajaran.index', compact('jadwal_pelajaran'));
    }

    public function create()
    {
        return view('jadwalpelajaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_jadwal' => 'required',
            'mata_pelajaran' => 'required',
            'hari' => 'required',
            'jam' => 'required',
            'kelas' => 'required',
            
        ]);
        JadwalPelajaran::create($request->all());

        return redirect()->route('jadwalpelajaran.index')->with('success', 'Jadwal Pelajaran berhasil ditambahkan.');
    }

    public function edit(JadwalPelajaran $jadwalpelajaran)
    {
        return view('jadwalpelajaran.edit', compact('jadwalpelajaran'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_jadwal' => 'required',
            'mata_pelajaran' => 'required',
            'hari' => 'required',
            'jam' => 'required',
            'kelas' => 'required',
        ]);

        $jadwalpelajaran =JadwalPelajaran::findOrFail($id);
        $data = $request->all();

        $jadwalpelajaran->update($data);

        return redirect()->route('jadwalpelajaran.index')->with('success', 'Jadwal Pelajaran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jadwal_pelajaran =JadwalPelajaran::findOrFail($id);

        $jadwal_pelajaran->delete();

        return redirect()->route('jadwalpelajaran.index')->with('success', 'Jadwal Pelajaran berhasil dihapus.');
    }

}