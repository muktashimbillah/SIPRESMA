@extends('template.index')

@section('main')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">Category Detail</h1>
</div>

<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Category Details</h6>
   </div>
   <div class="card-body">
      <table class="table table-bordered">
         <tr>
            <th>Category Name</th>
            <td>{{ $category->category }}</td>
         </tr>
         <tr>
            <th>Price</th>
            <td>{{ $category->price }}</td>
         </tr>
      </table>
   </div>
</div>
@endsection