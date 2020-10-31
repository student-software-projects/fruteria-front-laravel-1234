@extends('layout.app')

@section('title')<title>FRUTERIA - CONTACTO</title>@endsection

@section('header')
@section('link1')<a href="{{route('landing.index') }}" class="nav-link">INICIO</a>@endsection
@section('link2')<a class="nav-link" href="{{route('landing.acercade')}}" >ACERCA DE</a>@endsection
@section('link3')<a href="{{ route('landing.domicilios') }}" class="nav-link">DOMICILIOS</a>@endsection
@endsection

@section('content')
    <br>
    <div class="container">

        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">ubicación!</h4>
            <p>
                 <a href=" https://tinyurl.com/yxkqsl36"> Principal</a> <br>
                 <a href="https://tinyurl.com/y2b22ljf">sede centro</a> <br>
                 <a href="https://tinyurl.com/y6b54yhs">sede norte</a> <br>


            </p>
            <hr>
        </div>
        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">Sucursales!</h4>
            <p>
                hayuelos: calle 19B # 81B -30 <br>
                centro: carrera 7 # 11 - 76 <br>
                norte: calle 127 # 19 -32 <br>
            </p>
            <hr>
        </div>
        <div class="alert alert-secondary" role="alert">
            <h4 class="alert-heading">Contacto!</h4>
            <p>
                hayuelos: 3501244121 - 8091231 <br>
                centro: 3123311213 - 31234124 <br>
                norte: 3015312423- 7561123 <br>
            </p>
            <hr>
        </div>
    </div>
@endsection
