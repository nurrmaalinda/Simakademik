@extends('layouts.app')

@section('title', 'Edit Raport')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('raport.index') }}">Data Nilai</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('raport.update', $raport->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_raport">Id Raport</label>
                        <input type="text" name="id_raport" class="form-control" id="id_raport" value="{{ $raport->id_raport}}" required>
                        @if($errors->has('id_raport'))
                            <div class="text-danger">
                                {{ $errors->first('id_raport') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="id_siswa">Id Siswa</label>
                        <input type="text" name="id_siswa" class="form-control" id="id_siswa" value="{{ $raport->id_siswa}}" required>
                        @if($errors->has('id_siswa'))
                            <div class="text-danger">
                                {{ $errors->first('id_siswa') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $raport->nama }}" required>
                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="text" name="semester" class="form-control" id="nama" value="{{ $raport->nama }}" required>
                        @if($errors->has('semester'))
                            <div class="text-danger">
                                {{ $errors->first('semester') }}
                            </div>
                        @endif
                    </div>
                
                    <div class="form-group">
                        <label for="tahun_ajaran">Tahun Ajaran</label>
                        <input type="text" name="tahun_ajaran" class="form-control" id="tahun_ajaran" value="{{ $raport->tahun_ajaran }}" required>
                        @if($errors->has('tahun_ajaran'))
                            <div class="text-danger">
                                {{ $errors->first('tahun_ajaran') }}
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
