@extends('template.index')

@section('main')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">Edit Category</h1>
</div>

<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Category</h6>
   </div>
   <div class="card-body">
      <form action="{{ route('kategori.update', $category->id) }}" method="POST">
         @csrf
         @method('PUT')
         <div class="form-group">
            <label for="category">Category Name</label>
            <input type="text" class="form-control" id="category" name="category" value="{{ $category->category }}" required>
         </div>
         <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $category->price }}" required>
         </div>
         <button type="submit" class="btn btn-primary">Update Category</button>
      </form>
   </div>
</div>
@endsection