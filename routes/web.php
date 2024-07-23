<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\{
    DashboardController,
    JadwalPelajaranController,
    NilaiController,
    PresensiController,
    RaportController,
    SiswaController,
};
use App\Models\JadwalPelajaran;
use App\Models\Raport;

Route::get('/', function () {
    return redirect('/login');
});

Route::post('/logout', function (Request $request) {
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    auth()->logout();
    return redirect('/');
})->name('logout');

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::group([
], function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


    Route::group([
        'middleware' => 'role:admin'
    ], function () {
        Route::resource('/siswa', SiswaController::class);
        Route::resource('/nilai', NilaiController::class);
        Route::resource('/raport', RaportController::class);
        Route::resource('/jadwalpelajaran', JadwalPelajaranController::class);
        Route::resource('/presensi', PresensiController::class);
        
        
        Route::delete('siswa/{id}', [SiswaController::class, 'destroy'])->name ('siswa.delete');
        Route::get('/siswa/{siswa}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');

        Route::delete('nilai/{id}', [NilaiController::class, 'destroy'])->name ('nilai.delete');
        Route::get('/nilai/{nilai}/edit', [NilaiController::class, 'edit'])->name('nilai.edit');

        Route::delete('raport/{id}', [RaportController::class, 'destroy'])->name ('raport.delete');
        Route::get('/raport/{raport}/edit', [RaportController::class, 'edit'])->name('raport.edit');

        Route::delete('jadwalpelajaran/{id}', [JadwalPelajaranController::class, 'destroy'])->name ('jadwalpelajaran.delete');
        Route::get('/jadwalpelajaran/{jadwalpelajaran}/edit', [JadwalPelajaranController::class, 'edit'])->name('jadwalpelajaran.edit');
        
        Route::delete('presensi/{id}', [PresensiController::class, 'destroy'])->name ('presensi.delete');
    }); Route::get('/presensi/{presensi}/edit', [PresensiController::class, 'edit'])->name('presensi.edit');
});
