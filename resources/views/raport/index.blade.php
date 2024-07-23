@extends('layouts.app')

@section('title', 'Data Raport')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Raport</a></li>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('raport.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Raport Baru</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <th>No</th>
            <th>Id Raport</th>
            <th>Id Siswa</th>
            <th>Nama</th>
            <th>Semester</th>
            <th>Tahun Ajaran</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($raport as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                          <td>{{ $row->id_raport}}</td>
                          <td>{{ $row->id_siswa}}</td>
                          <td>{{ $row->nama}}</td>
                          <td>{{ $row->semester}}</td>
                          <td>{{ $row->tahun_ajaran}}</td>
                        
                  <td class="text-center">
                    <a href="{{ route('raport.edit', $row->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                    <!-- Tombol untuk menampilkan modal -->
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal" data-url="{{ route('raport.destroy', $row->id) }}">
                        <i class="fas fa-trash"></i>
                    </button>
                </td>
                </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@include('raport.modal-delete')

@if(session('success'))
  <script>
      Swal.fire({
          icon: 'success',
          title: 'Berhasil!',
          text: '{{ session('success') }}',
          showConfirmButton: false,
          timer: 3000
      });
  </script>
@endif

@if(session('error'))
  <script>
      Swal.fire({
          icon: 'error',
          title: 'Gagal!',
          text: '{{ session('error') }}',
          showConfirmButton: false,
          timer: 3000
      });
  </script>
@endif
@endsection


@push('script')

<script>
  $('.table').DataTable()
</script>
@endpush
