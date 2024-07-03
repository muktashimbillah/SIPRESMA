@extends('template.index')

@section('main')

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
   <h1 class="h3 mb-0 text-gray-800">Edit Meter Reading</h1>
</div>

<!-- Content Row -->
<div class="card shadow mb-4">
   <div class="card-body">
      <form action="{{ route('admin.meteran.update', $meterReading->id) }}" method="POST">
         @csrf
         @method('PUT')
         <div class="form-group">
            <label for="number_parameter">Number Parameter</label>
            <input type="text" name="number_parameter" class="form-control" value="{{ $meterReading->number_parameter }}" required>
         </div>
         <div class="form-group">
            <label for="category_id">Category</label>
            <select name="category_id" class="form-control" required>
               @foreach($categories as $category)
               <option value="{{ $category->id }}" {{ $meterReading->category_id == $category->id ? 'selected' : '' }}>{{ $category->category }}</option>
               @endforeach
            </select>
         </div>
         <div class="form-group">
            <label for="reading_date">Reading Date</label>
            <input type="date" name="reading_date" class="form-control" value="{{ $meterReading->reading_date }}" required>
         </div>
         <button type="submit" class="btn btn-primary">Update</button>
      </form>
   </div>
</div>

@endsection