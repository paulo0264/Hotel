@extends('layouts.main')

@section('title', 'Hotel')

@section('content')

<!-- SLIDER -->
<div class="container" id="slider-container">
      <div id="slider" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#slider"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#slider"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#slider"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
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
              <h5>Vista para o Mar</h5>
              <!--<a href="#" class="btn btn-dark">Ver Projeto</a>-->
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/banner-3.jpg" class="d-block w-100" alt="Casa 3" />
            <div class="carousel-caption">
              <h5>Paz e Tranquilidade</h5>
              <!--<a href="#" class="btn btn-dark">Ver Projeto</a>-->
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#slider"
          data-bs-slide="prev"
        >
          <i class="bi bi-chevron-compact-left"></i>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#slider"
          data-bs-slide="next"
        >
          <i class="bi bi-chevron-compact-right"></i>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
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

    <!-- DESTAQUES -->
    <div class="container" id="featured-container">
        <div class="row" id="acomodações">
            <div class="col-12">
                <h2 class="title primary-color">Nossas Acomodações</h2>
            </div>
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
                    <a href="#" class="btn btn-dark">Saber Mais</a>
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
                    <a href="#" class="btn btn-dark">Saber Mais</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- DESTAQUES -->
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
                    <a href="#" class="btn btn-dark">Saber Mais</a>
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
                    <a href="#" class="btn btn-dark">Saber Mais</a>
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
                    <a href="#" class="btn btn-dark">Saber Mais</a>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- DESTAQUES -->
    <div class="container" id="featured-container">
      <div class="col-12" id="eventos">
        <h2 class="title primary-color">Eventos em Destaque</h2>
        <p class="subtitle secondary-color">
          Conheça nossos Entretenimentos
        </p>
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
        <p class="subtitle secondary-color">
          Saiba mais sobre a experiência da nossa incrível equipe
        </p>
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
              <div class="col-12" id="info-numbers">
                <div class="row">
                  <div class="col-4">
                    <h3 class="primary-color">18</h3>
                    <p class="secondary-color">Anos na construção civil</p>
                  </div>
                  <div class="col-4">
                    <h3 class="primary-color">95</h3>
                    <p class="secondary-color">Projetos executados</p>
                  </div>
                  <div class="col-4">
                    <h3 class="primary-color">639</h3>
                    <p class="secondary-color">Clientes</p>
                  </div>
                </div>
              </div>
              <div class="col-12">
                <a class="btn btn-dark">Saber Mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mb-3">
        <div class="col-12">
            <h2 class="title primary-color">Pre-Reserva</h2>
        </div>
        <form action="/welcome" method="POST">
            @csrf
        <div class="row mt-3">
            <div class="col-3">
                <label for="validationCustom01">Check-in:</label>
                <input type="date" class="form-control" name="check_in" id="validationCustom01" placeholder="Please Enter Price" required/>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-3">
                <label for="validationCustom02">Check-out:</label>
                <input type="date" class="form-control" name="check_out" id="validationCustom02" placeholder="Please Enter Price" required/>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group">
                <label for="validationCustomUsername">Nome Completo:</label>
                <input class="form-control" name="name" id="validationCustomUsername" placeholder="Nome" required/>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group">
                <label for="validationCustomUsername">Telefone:</label>
                <input class="form-control" name="telefone" id="validationCustomUsername" placeholder="Telefone" required/>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="form-group">
                <label for="validationCustomUsername">E-mail:</label>
                <input class="form-control" name="email" id="validationCustomUsername" placeholder="Email" required/>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
        </div>
            <label for="">Quartos:</label>
            <select name="quarto" id="" class="form-select">
                <option value="Quarto Duplo">Quarto Duplo</option>
                <option value="Quarto Luxo 326">Quarto Luxo 326</option>
                <option value="Quarto Luxo 256">Quarto Luxo 256</option>
            </select>
            <input class="btn btn-primary mt-3" type="submit" value="Enviar">
            </form>
    </div>

@endsection
