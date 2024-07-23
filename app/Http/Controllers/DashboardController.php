<?php

namespace App\Http\Controllers;

use App\Models\DaftarBarang;
use App\Models\Karyawan;
use App\Models\ServisMasuk;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
{
    // Menghitung jumlah total semua barang
    // $totalJumlahSemuaBarang = DaftarBarang::sum('jumlah');
    $user = auth()->user();

    // // Menghitung jumlah total karyawan
    // $jumlahKaryawan = Karyawan::count();

    // // Menghitung jumlah total servis
    // $jumlahServis = ServisMasuk::count();

    // Ambil beberapa barang terbaru atau dengan kriteria tertentu
        // $jumlahBarang = DaftarBarang::orderBy('created_at', 'desc')->take(5)->get();

    if ($user && $user->id_role === 1) {
        // $jumlahSupplier = Supplier::count(); // Menghitung jumlah supplier
        return view('dashboard');
    }

    // Tambahkan logika lainnya jika pengguna bukan admin
    // $jumlahSupplier = Supplier::count();
    return view('dashboard2');
}
}
