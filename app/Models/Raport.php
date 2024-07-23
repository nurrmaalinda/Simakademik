<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Raport extends Model
{
    use HasFactory;

    protected $table = 'raport';

    protected $fillable = [
        'id_raport',
        'id_siswa',
        'nama',
        'semester',
        'tahun_ajaran',
    ];
}
