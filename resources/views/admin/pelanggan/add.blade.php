@extends('template.index')

@section('main')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">Tambah Meteran</h1>
</div>

<!-- Content Row -->
<div class="card shadow mb-4">
   <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Form Tambah Meteran</h6>
   </div>
   <div class="card-body">
      <form action="{{ route('admin.meteran.action.add') }}" method="POST">
         @csrf
         <div class="form-group">
            <label for="number_parameter">Number Parameter</label>
            <input type="number" class="form-control" id="number_parameter" name="number_parameter" required>
         </div>
         <div class="form-group">
            <label for="user_id">Pelanggan</label>
            <input type="hidden" name="user_id" value="{{ $user->id }}">
            <input type="text" class="form-control" value="{{ $user->name }}" disabled>
         </div>
         <div class="form-group">
            <label for="category_id">Kategori</label>
            <select class="form-control" id="category_id" name="category_id" required>
               @foreach($categories as $category)
               <option value="{{ $category->id }}">{{ $category->category }}</option>
               @endforeach
            </select>
         </div>
         <div class="form-group">
            <label for="reading_date">Tanggal Pembacaan</label>
            <input type="date" class="form-control" id="reading_date" name="reading_date" required>
         </div>
         <button type="submit" class="btn btn-primary">Tambah Meteran</button>
      </form>
   </div>
</div>

@endsection