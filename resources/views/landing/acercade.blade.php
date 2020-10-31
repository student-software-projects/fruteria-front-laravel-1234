@extends('layout.app')

@section('title')<title>FRUTERIA - ACERCA DE</title>@endsection

@section('header')
@section('link1')<a class="nav-link" href="{{route('landing.index')}}" >INICIO</a>@endsection
@section('link2')<a href="{{ route('landing.domicilios') }}" class="nav-link">DOMICILIOS</a>@endsection
@section('link3')<a href="{{route('landing.contacto') }}" class="nav-link">CONTACTO</a>@endsection
@endsection

@section('content')
    <br>
    <div class="container">
        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">Misión!</h4>
            <p>
                Nuestra misión es satisfacer las necesidades de todos nuestros clientes<br>
                y partner así como también de nuestros  trabajadores, con el objetivo de<br>
                maximizar la eficiencia y optimizar la rentabilidad a través de nuestra<br>
                diferenciación en calidad de producto, servicio y precio.<br>
            </p>
            <hr>
        </div>
        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">Visión!</h4>
            <p>
                Nuestra visión es conseguir la fidelización de nuestros clientes <br>
                a través de comercialización de productos de calidad, a partir de <br>
                la cual afianzar un crecimiento progresivo y sostenido en el mercado <br>
                nacional y europeo consolidando nuestra posición como empresa de <br>
                referencia en el sector con una imagen corporativa propia y diferenciada <br>
                de sus competidores. Frutas Terrados trabaja para conseguir la máxima <br>
                calidad, un catálogo de productos diversificado y el mejor servicio al <br>
                precio más competitivo.<br>
            </p>
            <hr>
        </div>
        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">Datos De Contacto!</h4>
            <p>
                Administrador: German Camilo Holguin Arce <br>
                Numero de Contacto: 3057078344  <br>
                Email: camilo.holguin@fruteria.com<br>
            </p>
            <hr>
        </div>
    </div>
@endsection

