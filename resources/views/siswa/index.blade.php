@extends('layouts.app')

@section('title', 'Data Siswa')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item active">Data Siswa</a></li>
@endsection

@section('content')
<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <a href="{{ route('siswa.create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> Tambah Siswa Baru</a>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-hover table-striped">
          <thead>
            <th width = "5%" class="text-center">No</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Tanggal Lahir</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Foto</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            @foreach ($siswa as $index => $row)
                <tr>
                    <td>{{ $index + 1 }}</td>
                          <td>{{ $row->nis}}</td>
                          <td>{{ $row->nama}}</td>
                          <td>{{ $row->tanggal_lahir}}</td>
                          <td>{{ $row->alamat}}</td>
                          <td>{{ $row->jenis_kelamin }}</td>
                          <td>
                              @if ($row->foto)
                              <img src="{{ asset('storage/foto/' . $row->foto) }}" alt="Foto Siswa" style="width: auto; height: auto; max-width: 160px; max-height: 120px;">
                              @else
                                  <p>Tidak ada foto</p>
                              @endif
                          </td>
                  <td class="text-center">
                    <a href="{{ route('siswa.edit', $row->id) }}" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                    <!-- Tombol untuk menampilkan modal -->
                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#confirmDeleteModal" data-url="{{ route('siswa.destroy', $row->id) }}">
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

@include('siswa.modal-delete')

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
