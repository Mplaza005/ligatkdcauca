@extends('layouts.app')

@section('content')
    <!-- Carrusel -->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/slide1.jpg') }}" class="d-block w-100" alt="...">
            </div>
            {{-- <div class="carousel-item">
                <img src="{{ asset('images/slide2.jpg') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slide3.jpg') }}" class="d-block w-100" alt="...">
            </div> --}}
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

   <!-- Sección de últimas noticias -->
<div class="container mt-5">
    <h2>Últimas Noticias</h2>
    <div class="row">
      @foreach($noticias as $noticia)
      <div class="col-md-4">
        <div class="card">
          <img src="{{ asset('images/logo.png') }}" class="card-img-top" alt="{{ $noticia->name }}">
          <div class="card-body">
            <h5 class="card-title">{{ $noticia->id }}</h5>
            <p class="card-text">{{ $noticia->body }}</p>
          
            <a href="{{ route('noticia.detalle', $noticia->id) }}" class="btn btn-primary">Ver más</a>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
@endsection
