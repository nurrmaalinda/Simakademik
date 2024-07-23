@extends('layouts.app')

@section('title', 'Tambah Jadwal Pelajaran Baru')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Jadwal Pelajaran Baru</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('jadwalpelajaran.index') }}">Data Jadwal Pelajaran</a></li>
                <li class="active">Tambah Jadwal Pelajaran Baru</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Jadwal Pelajaran Baru</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('jadwalpelajaran.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Id Jadwal:</label>
                        <input type="text" name="id_jadwal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Mata Pelajaran:</label>
                        <input type="text" name="mata_pelajaran" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Hari:</label>
                        <input type="text" name="hari" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Jam:</label>
                        <input type="text" name="jam" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kelas:</label>
                        <input type="text" name="kelas" class="form-control" required>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
