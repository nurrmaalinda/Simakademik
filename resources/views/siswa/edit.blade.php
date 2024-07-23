@extends('layouts.app')

@section('title', 'Edit Siswa')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('siswa.index') }}">Data Siswa</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('siswa.update', $siswa->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nis">Nis</label>
                        <input type="text" name="nis" class="form-control" id="nis" value="{{ $siswa->nis}}" required>
                        @if($errors->has('nis'))
                            <div class="text-danger">
                                {{ $errors->first('nis') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="{{ $siswa->nama}}" required>
                        @if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="tanggal_lahir">Tanggal Lahir</label>
                        <input type="date" name="tanggal_lahir" class="form-control" id="tanggal_lahir" value="{{ $siswa->tanggal_lahir}}" required>
                        @if($errors->has('tanggal_lahir'))
                            <div class="text-danger">
                                {{ $errors->first('tanggal_lahir') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" class="form-control" id="alamat" value="{{ $siswa->alamat }}" required>
                        @if($errors->has('alamat'))
                            <div class="text-danger">
                                {{ $errors->first('alamat') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                            <option value="Laki-laki" @if ($siswa->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                            <option value="Perempuan" @if ($siswa->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                        </select>
                        @if($errors->has('jenis_kelamin'))
                            <div class="text-danger"> 
                                {{ $errors->first('jenis_kelamin') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="foto">Foto</label>
                        <input type="file" name="foto" class="form-control-file" id="foto">
                        @if ($siswa->foto)
                            <img src="{{ asset('storage/foto/' . $siswa->foto) }}" alt="Foto Siswa" class="img-thumbnail " style="max-width: 200px; ">
                        @else
                            <p class="mt-2">Tidak ada foto tersimpan.</p>
                        @endif
                        @if($errors->has('foto'))
                            <div class="text-danger">
                                {{ $errors->first('foto') }}
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
