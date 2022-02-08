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
              <h5>Casas planejadas</h5>
              <!--<a href="#" class="btn btn-dark">Ver Projeto</a>-->
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/banner-2.jpg" class="d-block w-100" alt="Casa 2" />
            <div class="carousel-caption">
              <h5>Projetos Complexos</h5>
              <!--<a href="#" class="btn btn-dark">Ver Projeto</a>-->
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/banner-3.jpg" class="d-block w-100" alt="Casa 3" />
            <div class="carousel-caption">
              <h5>Projetos Inovadores</h5>
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
              <i class="bi bi-box primary-color"></i>
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
              <i class="bi bi-layers primary-color"></i>
              <div class="card-body">
                <h5 class="card-title primary-color">Você participa também</h5>
                <p class="card-text secondary-color">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="#" class="btn btn-dark">Saber Mais</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <div class="card text-center">
              <i class="bi bi-lightning-charge"></i>
              <div class="card-body primary-color">
                <h5 class="card-title primary-color">
                  Adiantamento de entregas
                </h5>
                <p class="card-text secondary-color">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <a href="#" class="btn btn-dark">Saber Mais</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- DESTAQUES -->
    <div class="container" id="featured-container">
        <div class="row">
            <div class="col-12">
                <h2 class="title primary-color">Nossas Acomodações</h2>
            </div>
            <div class="col-12 col-md-4">
                <div class="card text-center">
                <img src="img/room2.png" class="card-img-top" alt="quartos">
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
                <img src="img/room2.png" class="card-img-top" alt="quartos">
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
                <img src="img/room2.png" class="card-img-top" alt="quartos">
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
      <div class="col-12">
        <h2 class="title primary-color">Eventos em Destaque</h2>
        <p class="subtitle secondary-color">
          Conheça nossos projetos mais desafiadores
        </p>
      </div>
      <div class="col-12" id="featured-images">
        <div class="row g-4">
          <div class="col-12 col-md-4">
            <img src="img/event.jpg" alt="Projeto 1" class="img-fluid" />
            <div class="banner-content">
              <p class="secondary-color">Categoria</p>
              <h3>Nome do Projeto</h3>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <img src="img/gastronomia.jpg" alt="Projeto 2" class="img-fluid" />
            <div class="banner-content">
              <p class="secondary-color">Categoria</p>
              <h3>Nome do Projeto</h3>
            </div>
          </div>
          <div class="col-12 col-md-4">
            <img src="img/lazer.jpg" alt="Projeto 3" class="img-fluid" />
            <div class="banner-content">
              <p class="secondary-color">Categoria</p>
              <h3>Nome do Projeto</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- INFO -->
    <div class="container" id="info-container">
      <div class="col-12">
        <h2 class="title primary-color">Detalhes Importantes</h2>
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

@endsection
