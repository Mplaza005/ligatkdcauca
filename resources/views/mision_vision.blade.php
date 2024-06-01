@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-md-12 bg-light p-3" >
        <h1 style="text-align: center;">QUIENES SOMOS</h1>
        <div class="d-flex align-items-center">
            <img src="{{ asset('images/logo.png') }}" alt="Misión" class="img-fluid me-3 w-100 p-3" style="max-width: 475px;">
                <p>La Liga Caucana de Taekwondo es la organización que rige el Taekwondo en el departamento del Cauca, la cual es miembro de la Federación Colombiana de Taekwondo (FCT). La Liga Caucana de Taekwondo lidera este deporte de combate desde los principios de filosóficos del arte marcial coreano con los valores del olimpismo.
                    El Taekwondo se sustenta sobre bases sólidas, combinando lo tradicional con lo contemporáneo, reconociendo los valores filosóficos del arte marcial: cortesía, integridad, perseverancia, autocontrol y espíritu indomable y los valores sociales como: superación de uno mismo, la fortaleza moral y el respeto a los demás.
                </p> 

                
        </div>
    </div>
</div> 

<div class="row">
    <div class="col-md-12 bg-light p-3" >
        <h2>Misión</h2>
        <hr>
        <div class="d-flex align-items-center">
            <img src="{{ asset('images/mision.jpg') }}" alt="Misión" class="img-fluid me-3 w-100 p-3" style="max-width: 400px;">
            <p>«Nuestra misión es fomentar la excelencia deportiva y el desarrollo integral de nuestros miembros a través del Taekwondo. Nos comprometemos a promover los valores de respeto, disciplina y superación personal en un ambiente inclusivo y seguro. Buscamos inspirar a nuestra comunidad a alcanzar sus metas deportivas y personales, mientras cultivamos un espíritu de camaradería y cooperación. Trabajamos con dedicación para ser un referente de calidad y compromiso en la promoción y práctica del Taekwondo a nivel local, nacional e internacional.»</p>
            </div>
    </div>
</div> 

<div class="row">  
    <div class="col-md-12 bg-light p-3">
        <h2>Visión</h2>
        <hr>
        <div class="d-flex align-items-center">
             <p>«Nos visualizamos como una liga líder en el ámbito del Taekwondo, reconocida por su excelencia deportiva, valores éticos y contribución al desarrollo humano. Nos esforzamos por ser un modelo de organización innovadora y orientada al crecimiento, que brinda oportunidades equitativas para el desarrollo de talento y el éxito deportivo. Aspiramos a ser un punto de encuentro para atletas, entrenadores y entusiastas del Taekwondo, promoviendo la colaboración y el intercambio de conocimientos a nivel local e internacional. Con pasión y compromiso, trabajamos hacia un futuro donde el Taekwondo sea celebrado como un vehículo para el bienestar personal y la construcción de comunidades fuertes y saludables.»</p>
            <img src="{{ asset('images/vision.jpg') }}" alt="Visión" class="img-fluid me-3 w-100 p-3 " style="max-width: 400px;" >
        </div>
    </div>
</div> 


@endsection
