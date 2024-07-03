@extends('template.index')

@section('main')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">Daftar Meteran</h1>
</div>

<!-- Content Row -->
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Meteran</h6>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Nomor Parameter</th>
                  <th>User</th>
                  <th>Kategori</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tbody>
               @foreach($meters as $index => $meter)
               <tr>
                  <td>{{ $index + 1 }}</td>
                  <td>{{ $meter->number_parameter }}</td>
                  <td>{{ $meter->user->name }}</td>
                  <td>{{ $meter->category->category }}</td>
                  <td>
                     <a href="{{ route('admin.tagihan.list', ['id' => $meter->id]) }}" class="btn btn-primary btn-sm">Lihat Riwayat Tagihan</a>
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