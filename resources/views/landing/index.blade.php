@extends('layout.app')

@section('title')<title>FRUTERIA - INICIO</title>@endsection

@section('header')
    @section('link1')<a class="nav-link" href="{{route('landing.acercade')}}" >ACERCA DE</a>@endsection
    @section('link2')<a href="{{ route('landing.domicilios') }}" class="nav-link">DOMICILIOS</a>@endsection
    @section('link3')<a href="{{route('landing.contacto') }}" class="nav-link">CONTACTO</a>@endsection
@endsection


@section('content')
    <br>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/primera_imagen.jpg')}}" class="d-block w-100" width="50"alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>MOSTRARIO</h5>
                    <p>Podemos encontrar las diferentes  frutas que tenemos en stock.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/manzanas.jpg')}}" class="d-block w-100" width="350"alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>MANZANAS</h5>
                    <p>Es una fruta pomácea de forma redonda
                        y sabor más o menos dulce, dependiendo
                        de la variedad.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('img/piña.jpg') }}" class="d-block w-100" width="350"alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>PIÑAS</h5>
                    <p>es una especie de la familia de las bromeliáceas, nativa de América del Sur.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/melon.jpg')}}" class="d-block w-100" width="350"alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>MELONES</h5>
                    <p> es una especie de la familia de las cucurbitáceas.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/uvas.jpg')}}" class="d-block w-100" width="350"alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>UVAS</h5>
                    <p>es la común denominación que reciben los frutos formados en los
                        racimos de la vid. Usada mundialmente para su fermentación,
                        ya que esta da lugar al vino.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/sandia.jpg')}}" class="d-block w-100" width="350"alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>SANDIA</h5>
                    <p>es una especie de la familia Cucurbitaceae
                        originaria de África, pero tiene una gran
                        presencia y difusión en Asia.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/kiwi.jpg')}}" class="d-block w-100" width="350"alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h5>KIWI</h5>
                    <p>es la baya de la enredadera Actinidia deliciosa.
                        Es originaria de una gran área de China, sobre
                        todo de los bosques del valle del río Yangtsé</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/mango.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>MANGO</h5>
                    <p>es el nombre de las frutas de varias especies de árboles del
                        género Mangifera, especialmente de Mangifera indica, y sus
                        numerosos cultivares.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection


