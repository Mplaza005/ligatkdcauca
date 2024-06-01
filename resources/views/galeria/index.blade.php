<!-- resources/views/images/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container my-4 py-4">
    <div class="row">
        @foreach($images as $image)
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ asset('storage/images/'.$image->urlImg) }}" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Imagen</h5>
                        <p class="card-text">Esta es una descripción de la imagen.</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="card-body m-4">
        {{ $images->links()}}
      </div>
  
</div>
@endsection
