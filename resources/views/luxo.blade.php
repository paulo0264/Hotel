@extends('layouts.main')

@section('title', 'Luxo')

@section('content')


        <!-- DESTAQUES -->
<div class="container" id="opcoes">
      <div class="col-12" id="eventos">
        <h2 class="title primary-color">Acomodações</h2>
        <p class="subtitle secondary-color">
          Conheça nossas Acomodações
        </p>
      </div>
    <div class="container mt-3" id="featured-container">
        <div class="row" id="acomodações">
            <div class="col-12 col-md-4">
                <div class="card text-center">
                <img src="img/room1.jpg" class="card-img-top" alt="quartos">
                    <div class="card-body">
                    <h5 class="card-title primary-color">Acomodações Luxo</h5>
                    <p class="card-text secondary-color">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>

                        <a href="#" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal">Reservar</a>



                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card text-center">
                <img src="img/room2.jpg" class="card-img-top" alt="quartos">
                    <div class="card-body">
                    <h5 class="card-title primary-color">Projetos completos</h5>
                    <p class="card-text secondary-color">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="/superluxo" class="btn btn-dark">Saber Mais</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card text-center">
                <img src="img/room3.jpg" class="card-img-top" alt="quartos">
                    <div class="card-body">
                    <h5 class="card-title primary-color">Projetos completos</h5>
                    <p class="card-text secondary-color">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="/simples" class="btn btn-dark">Saber Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3" id="featured-container">
        <div class="row" id="acomodações">
            <div class="col-12 col-md-4">
                <div class="card text-center">
                <img src="img/room1.jpg" class="card-img-top" alt="quartos">
                    <div class="card-body">
                    <h5 class="card-title primary-color">Acomodações Luxo</h5>
                    <p class="card-text secondary-color">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="/luxo" class="btn btn-dark">Saber Mais</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card text-center">
                <img src="img/room2.jpg" class="card-img-top" alt="quartos">
                    <div class="card-body">
                    <h5 class="card-title primary-color">Projetos completos</h5>
                    <p class="card-text secondary-color">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="/superluxo" class="btn btn-dark">Saber Mais</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card text-center">
                <img src="img/room3.jpg" class="card-img-top" alt="quartos">
                    <div class="card-body">
                    <h5 class="card-title primary-color">Projetos completos</h5>
                    <p class="card-text secondary-color">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="/simples" class="btn btn-dark">Saber Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
