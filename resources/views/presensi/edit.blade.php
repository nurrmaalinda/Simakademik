@extends('layouts.app')

@section('title', 'Edit Presensi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('presensi.index') }}">Data Presensi</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('presensi.update', $presensi->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_siswa">Id Siswa</label>
                        <input type="text" name="id_siswa" class="form-control" id="id_siswa" value="{{ $presensi->id_siswa}}" required>
                        @if($errors->has('id_siswa'))
                            <div class="text-danger">
                                {{ $errors->first('id_siswa') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $presensi->nama}}" required>
                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="id_jadwal">Id Jadwal</label>
                        <input type="text" name="id_jadwal" class="form-control" id="id_jadwal" value="{{ $presensi->id_jadwal }}" required>
                        @if($errors->has('id_jadwal'))
                            <div class="text-danger">
                                {{ $errors->first('id_jadwal') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ $presensi->tanggal}}" required>
                        @if($errors->has('tanggal'))
                            <div class="text-danger">
                                {{ $errors->first('tanggal') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control" id="status">
                            <option value="Hadir" @if ($presensi->status == 'Hadir') selected @endif>Hadir</option>
                            <option value="Izin" @if ($presensi->status == 'Izin') selected @endif>Izin</option>
                            <option value="Sakit" @if ($presensi->status == 'Sakit') selected @endif>Sakit</option>
                        </select>
                        @if($errors->has('status'))
                            <div class="text-danger"> 
                                {{ $errors->first('status') }}
                            </div>
                        @endif
                    </div>

                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-dark">Reset</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@push('script')
@endpush
