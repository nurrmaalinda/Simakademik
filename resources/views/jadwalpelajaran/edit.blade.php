@extends('layouts.app')

@section('title', 'Edit Jadwal Pelajaran')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('jadwalpelajaran.index') }}">Data Jadwal Pelajaran</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{route('jadwalpelajaran.update', $jadwalpelajaran->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_jadwal">Id Jadwal</label>
                        <input type="text" name="id_jadwal" class="form-control" id="id_jadwal" value="{{ $jadwalpelajaran->id_jadwal}}" required>
                        @if($errors->has('id_jadwal'))
                            <div class="text-danger">
                                {{ $errors->first('id_jadwal') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="mata_pelajaran">Mata Pelajaran</label>
                        <input type="text" name="mata_pelajaran" class="form-control" id="mata_pelajaran" value="{{ $jadwalpelajaran->mata_pelajaran}}" required>
                        @if($errors->has('mata_pelajaran'))
                            <div class="text-danger">
                                {{ $errors->first('mata_pelajaran') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="hari">Hari</label>
                        <input type="text" name="hari" class="form-control" id="hari" value="{{ $jadwalpelajaran->hari }}" required>
                        @if($errors->has('hari'))
                            <div class="text-danger">
                                {{ $errors->first('hari') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="jam">Jam</label>
                        <input type="text" name="jam" class="form-control" id="jam" value="{{ $jadwalpelajaran->jam }}" required>
                        @if($errors->has('jam'))
                            <div class="text-danger">
                                {{ $errors->first('jam') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" class="form-control" id="kelas" value="{{ $jadwalpelajaran->kelas }}" required>
                        @if($errors->has('kelas'))
                            <div class="text-danger">
                                {{ $errors->first('kelas') }}
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
