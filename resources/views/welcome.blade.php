@extends('layouts.main')

@section('title', 'Hotel')

@section('content')

<!-- SLIDER -->
<div id="slider-container">
    <div id="slider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/banner-1.jpg" class="d-block w-100" alt="Casa 1" />
                <div class="carousel-caption">
                    <h5>Super Acomodações</h5>
                    <!--<a href="#" class="btn btn-dark">Ver Projeto</a>-->
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/banner-2.jpg" class="d-block w-100" alt="Casa 2" />
                <div class="carousel-caption">
                    <h5>Paz e Tranquilidade </h5>
                    <!--<a href="#" class="btn btn-dark">Ver Projeto</a>-->
                </div>
            </div>
            <div class="carousel-item">
                <img src="img/banner-3.jpg" class="d-block w-100" alt="Casa 3" />
                <div class="carousel-caption">
                    <h5>Vista para o Mar</h5>
                    <!--<a href="#" class="btn btn-dark">Ver Projeto</a>-->
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
            <i class="bi bi-chevron-compact-left"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
            <i class="bi bi-chevron-compact-right"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="col-12 col-md-10 offset-md-1" id="mini-banners">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="card text-center">
                        <i class="bi bi-wifi"></i>
                        <div class="card-body">
                            <h5 class="card-title primary-color">Wifi</h5>
                            <p class="card-text secondary-color">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card text-center">
                        <i class="bi bi-tv"></i>
                        <div class="card-body">
                            <h5 class="card-title primary-color">TV</h5>
                            <p class="card-text secondary-color">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-4">
                    <div class="card text-center">
                        <i class="bi bi-brightness-low"></i>
                        <div class="card-body primary-color">
                            <h5 class="card-title primary-color">
                                Ar
                            </h5>
                            <p class="card-text secondary-color">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>



<!-- DESTAQUES -->
<div class="container" id="featured-container">
    <div class="col-12" id="eventos">
        <h2 class="title primary-color">Acomodações</h2>
    </div>
    <div class="container mt-3" id="featured-container">
        <div class="row" id="acomodações">
            <div class="col-12 col-md-4">
                <div class="card text-center">
                    <img src="img/room1.jpg" class="card-img-top" alt="quartos">
                    <div class="card-body">
                        <h5 class="card-title primary-color">Acomodações Simples</h5>
                        <p class="card-text secondary-color">
                            Conheça nossas acomodações Simples.
                        </p>
                        <a href="#" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#simplesModal">Ver
                            Fotos</a>

                    </div>
                </div>
            </div>

            <div class="modal">
                <div class="content">
                    <h1 class="title">Olá, eu sou um modal!</h1>
                    <p class="text">Você pode me fechar clicando fora desta área.</p>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card text-center">
                    <img src="img/room2.jpg" class="card-img-top" alt="quartos">
                    <div class="card-body">
                        <h5 class="card-title primary-color">Luxo</h5>
                        <p class="card-text secondary-color">
                            Conheça nossas acomodações Luxo.
                        </p>
                        <a href="#" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#luxoModal">Ver
                            Fotos</a>

                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="card text-center">
                    <img src="img/room3.jpg" class="card-img-top" alt="quartos">
                    <div class="card-body">
                        <h5 class="card-title primary-color">Super Luxo</h5>
                        <p class="card-text secondary-color">
                            Conheça nossas acomodações Super Luxo.
                        </p>
                        <a href="#" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#superluxoModal">Ver
                            Fotos</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- DESTAQUES -->
<div class="container" id="featured-container">
    <div class="col-12" id="eventos">
        <h2 class="title primary-color">Eventos em Destaque</h2>
    </div>
    <div class="col-12" id="featured-images">
        <div class="row g-4">
            <div class="col-12 col-md-4">
                <img src="img/event.jpg" alt="Projeto 1" class="img-fluid" />
                <div class="banner-content">
                    <h3>Eventos</h3>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <img src="img/gastronomia.jpg" alt="Projeto 2" class="img-fluid" />
                <div class="banner-content">
                    <h3>Ambiente Aconchegante</h3>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <img src="img/lazer.jpg" alt="Projeto 3" class="img-fluid" />
                <div class="banner-content">
                    <h3>Lazer</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- INFO -->
<div class="container" id="info-container">
    <div class="col-12" id="sobrenos">
        <h2 class="title primary-color">Sobre Nós</h2>
    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-12 col-md-5" id="info-banner">
                <img src="img/Hotel-img.jpg" alt="Informações" class="img-fluid" />
            </div>
            <div class="col-12 col-md-7 bg-secondary-color" id="info-content">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">Estes dados fazem a diferença:</h2>
                        <p class="subtitle secondary-color">
                            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
                            Praesentium tempore fugit et iusto quisquam beatae impedit
                            nobis quas doloribus, atque, ut id similique eligendi, ab
                            soluta magnam maxime cum debitis.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Pré Reserva-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Fazer Pre-Reserva</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <p class="mb-3">
                        Obs: Ao fazer seu cadastro da Pré reserva,
                        isso não garante sua acomodação, sua reserva estará garantida assim que um dba_closenossos
                        atendentes te ligar e confirmar
                        mediante o pagamento de 50% da estadia.
                    </p>
                    <form action="/reserva" method="POST">
                        @csrf
                        <label for="nim">Nome:</label>
                        <input type="text" name="name" class="form-control">

                        <label for="nim">Cpf:</label>
                        <input type="text" name="cpf" class="form-control">

                        <label for="nim">Data de Nascimento:</label>
                        <input type="date" name="nascimento" class="form-control">

                        <label for="nim">Telefone:</label>
                        <input type="text" name="telefone" class="form-control">

                        <label for="nim">Endereço:</label>
                        <input type="text" name="endereco" class="form-control">

                        <label for="">Quartos:</label>
                        <select type="text" name="quarto" id="" class="form-select">
                            <option value="Quarto Duplo">Quarto Duplo</option>
                            <option value="Quarto Luxo 326">Quarto Luxo 326</option>
                            <option value="Quarto Luxo 256">Quarto Luxo 256</option>
                        </select>

                        <div class="row">
                            <div class="col">
                                <label>Check-in:</label>
                                <input type="date" class="form-control" name="checkin"
                                    placeholder="Please Enter Price" />
                            </div>
                            <div class="col">
                                <label>Check-out:</label>
                                <input type="date" class="form-control" name="checkout"
                                    placeholder="Please Enter Price" />
                            </div>
                        </div>

                        <input class="btn btn-primary mt-3" type="submit" value="Cadastrar">
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Categoria Simples -->
<div class="modal fade" id="simplesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Acomodações Simples</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- DESTAQUES -->
                <div class="container" id="featured-container">
                    <div class="container mt-3" id="featured-container">
                        <div class="row" id="acomodações">
                            <div class="col-12 col-md-4">
                                <div class="card text-center">
                                    <img src="img/room1.jpg" class="card-img-top" alt="quartos">
                                    <div class="card-body">
                                        <h5 class="card-title primary-color">Acomodações Luxo</h5>
                                        <p class="card-text secondary-color">
                                            Conheça nossas acomodações de Luxo.
                                        </p>
                                        <a class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Reservar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="modal">
                                <div class="content">
                                    <h1 class="title">Olá, eu sou um modal!</h1>
                                    <p class="text">Você pode me fechar clicando fora desta área.</p>
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="card text-center">
                                    <img src="img/room2.jpg" class="card-img-top" alt="quartos">
                                    <div class="card-body">
                                        <h5 class="card-title primary-color">Super Luxo</h5>
                                        <p class="card-text secondary-color">
                                            Conheça nossas acomodações Super Luxo.
                                        </p>

                                        <a href="/superluxo" class="btn btn-primary">Reservar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="card text-center">
                                    <img src="img/room3.jpg" class="card-img-top" alt="quartos">
                                    <div class="card-body">
                                        <h5 class="card-title primary-color">Simples</h5>
                                        <p class="card-text secondary-color">
                                            Conheça nossas acomodações Simples.
                                        </p>

                                        <a href="/superluxo" class="btn btn-primary">Reservar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal Categoria Luxo -->
<div class="modal fade" id="luxoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Acomodações Luxo</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- DESTAQUES -->
                <div class="container" id="featured-container">
                    <div class="container mt-3" id="featured-container">
                        <div class="row" id="acomodações">
                            <div class="col-12 col-md-4">
                                <div class="card text-center">
                                    <img src="img/room1.jpg" class="card-img-top" alt="quartos">
                                    <div class="card-body">
                                        <h5 class="card-title primary-color">Acomodações Luxo</h5>
                                        <p class="card-text secondary-color">
                                            Conheça nossas acomodações de Luxo.
                                        </p>
                                        <a class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Reservar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="modal">
                                <div class="content">
                                    <h1 class="title">Olá, eu sou um modal!</h1>
                                    <p class="text">Você pode me fechar clicando fora desta área.</p>
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="card text-center">
                                    <img src="img/room2.jpg" class="card-img-top" alt="quartos">
                                    <div class="card-body">
                                        <h5 class="card-title primary-color">Super Luxo</h5>
                                        <p class="card-text secondary-color">
                                            Conheça nossas acomodações Super Luxo.
                                        </p>
                                        <a href="/exampleModal" class="btn btn-primary">Reservar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="card text-center">
                                    <img src="img/room3.jpg" class="card-img-top" alt="quartos">
                                    <div class="card-body">
                                        <h5 class="card-title primary-color">Simples</h5>
                                        <p class="card-text secondary-color">
                                            Conheça nossas acomodações Simples.
                                        </p>
                                        <a href="/exampleModal" class="btn btn-primary">Reservar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Modal Categoria Super Luxo -->
<div class="modal fade" id="superluxoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Acomodações Super Luxo</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <!-- DESTAQUES -->
                <div class="container" id="featured-container">
                    <div class="container mt-3" id="featured-container">
                        <div class="row" id="acomodações">
                            <div class="col-12 col-md-4">
                                <div class="card text-center">
                                    <img src="img/room1.jpg" class="card-img-top" alt="quartos">
                                    <div class="card-body">
                                        <h5 class="card-title primary-color">Acomodações Luxo</h5>
                                        <p class="card-text secondary-color">
                                            Conheça nossas acomodações de Luxo.
                                        </p>
                                        <a class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">Reservar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="modal">
                                <div class="content">
                                    <h1 class="title">Olá, eu sou um modal!</h1>
                                    <p class="text">Você pode me fechar clicando fora desta área.</p>
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="card text-center">
                                    <img src="img/room2.jpg" class="card-img-top" alt="quartos">
                                    <div class="card-body">
                                        <h5 class="card-title primary-color">Super Luxo</h5>
                                        <p class="card-text secondary-color">
                                            Conheça nossas acomodações Super Luxo.
                                        </p>
                                        <a href="/superluxo" class="btn btn-primary">Reservar</a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-4">
                                <div class="card text-center">
                                    <img src="img/room3.jpg" class="card-img-top" alt="quartos">
                                    <div class="card-body">
                                        <h5 class="card-title primary-color">Simples</h5>
                                        <p class="card-text secondary-color">
                                            Conheça nossas acomodações Simples.
                                        </p>
                                        <a href="/superluxo" class="btn btn-primary">Reservar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
