@extends('template.index')

@section('main')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">Create Category</h1>
</div>

<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Add New Category</h6>
   </div>
   <div class="card-body">
      <form action="{{ route('kategori.store') }}" method="POST">
         @csrf
         <div class="form-group">
            <label for="category">Category Name</label>
            <input type="text" class="form-control" id="category" name="category" required>
         </div>
         <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" required>
         </div>
         <button type="submit" class="btn btn-primary">Add Category</button>
      </form>
   </div>
</div>
@endsection