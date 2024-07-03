@extends('template.index')

@section('main')


<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">Detail Meteran - {{ $pelanggan->name }}</h1>
   <a href="{{route('admin.meteran.add', ['user_id' => $pelanggan->id])}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> Tambah Meteran</a>
</div>


<!-- Content Row -->
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Meter Readings</h6>
   </div>
   <div class="card-body">
      <div class="table-responsive">
         <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
               <tr>
                  <th>No</th>
                  <th>Number Parameter</th>
                  <th>Category</th>
                  <th>Reading Date</th>
                  <th>Action</th>
               </tr>
            </thead>
            <tfoot>
               <tr>
                  <th>No</th>
                  <th>Number Parameter</th>
                  <th>Category</th>
                  <th>Reading Date</th>
                  <th>Action</th>
               </tr>
            </tfoot>
            <tbody>
               @foreach($meterReadings as $index => $reading)
               <tr>
                  <td>{{ $index + 1 }}</td>
                  <td>{{ $reading->number_parameter }}</td>
                  <td>{{ $reading->category->category }}</td>
                  <td>{{ $reading->reading_date }}</td>
                  <td>
                     <a href="{{ route('admin.meteran.edit', $reading->id) }}" class="btn btn-warning btn-sm">Edit</a>
                     <form action="{{ route('admin.meteran.delete', $reading->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                     </form>
                     <a href="{{ route('admin.tagihan.list', ['id' => $reading->id]) }}" class="btn btn-sm btn-primary">Tagihan</a>

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