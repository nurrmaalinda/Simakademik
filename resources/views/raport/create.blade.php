@extends('layouts.app')

@section('title', 'Tambah Raport Baru')

@section('content_header')
    <div class="page-header page-header-default">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-file-plus"></i> <span class="text-semibold">Tambah Raport Baru</span></h4>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ route('raport.index') }}">Data Raport</a></li>
                <li class="active">Tambah Raport Baru</li>
            </ul>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-lg-12">
        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title">Tambah Raport Baru</h5>
            </div>

            <div class="panel-body">
                <form action="{{ route('raport.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Id Raport:</label>
                        <input type="text" name="id_raport" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Id Siswa:</label>
                        <input type="text" name="id_siswa" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Semester:</label>
                        <input type="text" name="semester" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>tahun Ajaran:</label>
                        <input type="text" name="tahun_ajaran" class="form-control" required>
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
