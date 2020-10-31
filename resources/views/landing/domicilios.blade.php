@extends('layout.app')

@section('title')<title>FRUTERIA - DOMICILIOS</title>@endsection

@section('header')
@section('link1')<a href="{{ route('landing.index') }}" class="nav-link">INICIO</a>@endsection
@section('link2')<a class="nav-link" href="{{route('landing.acercade')}}" >ACERCA DE</a>@endsection
@section('link3')<a href="{{route('landing.contacto') }}" class="nav-link">CONTACTO</a>@endsection
@endsection


@section('content')
    <br>
    <div class="container">

        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">costo!</h4>
            <p>
                El costo del domicilio tiene un valor de 1000 pesos.
            </p>
            <hr>
        </div>
        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">Horario!</h4>
            <p>
                el horario de atencion al publico es de lunes a sabado de 8:00 am a 8:00 pm <br>
                los domingos y festivos es de: 10:30 am a 9:30 pm. <br>
            </p>
            <hr>
        </div>
    </div>
@endsection
