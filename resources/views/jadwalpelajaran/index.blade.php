@extends('layouts.app')

@section('title', 'Data Jadwal Pelajaran')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Jadwal Pelajaran</a></li>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('jadwalpelajaran.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Jadwal Pelajaran Baru</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <th width = "5%" class="text-center">No</th>
            <th>Id Jadwal</th>
            <th>Mata Pelajaran</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Kelas</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($jadwal_pelajaran as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                          <td>{{ $row->id_jadwal}}</td>
                          <td>{{ $row->mata_pelajaran}}</td>
                          <td>{{ $row->hari}}</td>
                          <td>{{ $row->jam }}</td>
                          <td>{{ $row->kelas }}</td>
                        
                  <td class="text-center">
                    <a href="{{ route('jadwalpelajaran.edit', $row->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                    <!-- Tombol untuk menampilkan modal -->
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal" data-url="{{ route('jadwalpelajaran.destroy', $row->id) }}">
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

@include('jadwalpelajaran.modal-delete')

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
