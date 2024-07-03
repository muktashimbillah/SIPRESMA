@extends('template.index')

@section('main')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">Daftar Kategori</h1>
   <a href="{{ route('kategori.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
      <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kategori
   </a>
</div>

<!-- Content Row -->
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Kategori</h6>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Nama Kategori</th>
                  <th>Harga</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tfoot>
               <tr>
                  <th>No</th>
                  <th>Nama Kategori</th>
                  <th>Harga</th>
                  <th>Action</th>
               </tr>
            </tfoot>
            <tbody>
               @foreach($categories as $index => $category)
               <tr>
                  <td>{{ $index + 1 }}</td>
                  <td>{{ $category->category }}</td>
                  <td>{{ $category->price }}</td>
                  <td>
                     <a href="{{ route('kategori.show', $category->id) }}" class="btn btn-info btn-sm">Detail</a>
                     <a href="{{ route('kategori.edit', $category->id) }}" class="btn btn-warning btn-sm">Edit</a>
                     <form action="{{ route('kategori.destroy', $category->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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

@section('js')
<!-- Page level plugins -->
<script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

<!-- Page level custom scripts -->
<script src="{{asset('js/demo/datatables-demo.js')}}"></script>
@endsection

@section('css')
<link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
@endsection