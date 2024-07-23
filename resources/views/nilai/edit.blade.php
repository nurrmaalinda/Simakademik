@extends('layouts.app')

@section('title', 'Edit Nilai')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{ route('nilai.index') }}">Data Nilai</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <form action="{{ route('nilai.update', $nilai->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="id_nilai">Id Nilai</label>
                        <input type="text" name="id_nilai" class="form-control" id="id_nilai" value="{{ $nilai->id_nilai}}" required>
                        @if($errors->has('id_nilai'))
                            <div class="text-danger">
                                {{ $errors->first('id_nilai') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="mata_pelajaran">Mata Pelajaran</label>
                        <input type="text" name="mata_pelajaran" class="form-control" id="mata_pelajaran" value="{{ $nilai->mata_pelajaran}}" required>
                        @if($errors->has('mata_pelajaran'))
                            <div class="text-danger">
                                {{ $errors->first('mata_pelajaran') }}
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nilai">Nilai</label>
                        <input type="text" name="nilai" class="form-control" id="nilai" value="{{ $nilai->nilai}}" required>
                        @if($errors->has('nilai'))
                            <div class="text-danger">
                                {{ $errors->first('nilai') }}
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
