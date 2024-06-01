@extends('layouts.app')

@section('content')

<form action="{{route('galeria.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
  
    <div class="mb-3">
        <label for="description" class="form-label">Descripcion</label>
        <textarea id="body" name="body" class="form-control" rows="4" required></textarea>
    </div>

    <div class="mb-3">
        <label for="pdf" class="form-label">Upload PDF</label>
        <input type="file" id="urlImg" name="urlImg" class="form-control" accept="image/*">
    </div>

    <button type="submit" class="btn btn-outline-success mb-4 ">Submit</button>

</form>

@endsection