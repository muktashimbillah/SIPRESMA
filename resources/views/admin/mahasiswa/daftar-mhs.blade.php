@extends('template.index')

@section('css')
<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<style>
   .btn-edit {
      color: rgba(10, 6, 244, 1);
   }

   .btn-del {
      color: red;
   }
</style>
@endsection

@section('js')
<!-- Page level plugins -->
<script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
@endsection

@section('main')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">DAFTAR MAHASISWA PRESTASI SISTEM INFORMASI</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
   <div class="card-header py-3 d-flex justify-content-between align-items-center">
      <h6 class="m-0 font-weight-bold text-primary">Tabel</h6>
      <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary btn-sm">
         <i class="fa fa-plus"></i> Tambah Mahasiswa Prestasi
      </a>
   </div>

   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Foto Profile</th>
                  <th>Nama Lengkap</th>
                  <th>NIM</th>
                  <th>Angkatan</th>
                  <th>Ruang</th>
                  <th>No Telp</th>
                  <th>Aksi</th>
               </tr>
            </thead>
            <tfoot>
               <tr>
                  <th>No</th>
                  <th>Foto Profile</th>
                  <th>Nama Lengkap</th>
                  <th>NIM</th>
                  <th>Angkatan</th>
                  <th>Ruang</th>
                  <th>No Telp</th>
                  <th>Aksi</th>
               </tr>
            </tfoot>
            <tbody>
               @foreach ($mahasiswas as $index => $mahasiswa)
               <tr>
                  <td>{{ $index + 1 }}</td>
                  <td>
                     @if($mahasiswa->fotoprofil)
                     <img src="{{ asset('storage/' . $mahasiswa->fotoprofil) }}" alt="Foto Profile" width="50">
                     @else
                     <span>Tidak Ada Foto</span>
                     @endif
                  </td>
                  <td>{{ $mahasiswa->nama_lengkap }}</td>
                  <td>{{ $mahasiswa->nim }}</td>
                  <td>{{ $mahasiswa->angkatan }}</td>
                  <td>{{ $mahasiswa->ruang }}</td>
                  <td>{{ $mahasiswa->notelp }}</td>
                  <td>
                     <!-- Tombol Edit -->
                     <a href="{{ route('mahasiswa.edit', $mahasiswa->id) }}" class="btn btn-edit px-1">
                        <i class="fa fa-eye"></i>
                     </a>

                     <!-- Form untuk Delete -->
                     <form action="{{ route('mahasiswa.delete', $mahasiswa->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-del px-1">
                           <i class="fa fa-trash"></i>
                        </button>
                     </form>
                  </td>

               </tr>
               @endforeach
            </tbody>
         </table>
      </div>
   </div>
</div>


@endsection