<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon" />
    <!-- Google fonts Lato -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <!-- CSS Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Bootstrap Icons -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css"
    />
    <!-- CSS do projeto -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- JavaScript Bootstrap -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>

    </head>
    <body>
        <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top bg-primary-color" id="navbar">
      <div class="container py-3">
        <a class="navbar-brand" href="#">
          <img src="img/hotel.png" alt="iMovi" />
          <span>Hotel</span>
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbar-items"
          aria-controls="navbar-items"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="bi bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbar-items">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/welcome">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Projetos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Imóveis</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contato</a>
            </li>
            @guest
            <li class="nav-item">
              <a class="nav-link" href="/login">Logar</a>
            </li>
            @endguest
          </ul>
        </div>
      </div>
    </nav>
<!--
    <header class="col-md-12 menu">

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse menu" id="navbarSupportedContent">
                    <a href="/" class="navbar-brand navbar">
                        <img src="/img/hotel.png" alt="Logo">
                    </a>
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav" id="navbar">
                        <li class="nav-item">
                            <a href="/" class="nav-link">Hotel</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Contato</a>
                        </li>
                        @auth
                            <li class="nav-item">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <a href="/logout" class="nav-link"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">Sair</a>
                                </form>
                            </li>
                        @endauth
                        @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Logar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastrar</a>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->
        <!--<a href="/" class="navbar-brand navbar">
            <img src="/img/hotel.png" alt="Logo">
        </a>-->

    <!--<nav class="navbar navbar-expand-lg navbar-light">
        <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
                <img src="/img/hotel.png" alt="Logo">
            </a>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/" class="nav-link">Hotel</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Contato</a>
                </li>
                @auth
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Dash</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <a href="/logout" class="nav-link"
                                onclick="event.preventDefault();
                                this.closest('form').submit();">Sair</a>
                        </form>
                    </li>
                @endauth
                @guest
                <li class="nav-item">
                    <a href="/login" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">Cadastrar</a>
                </li>
                @endguest
            </ul>
        </div>
    </nav>-->
    @yield('content')
    <!-- FOOTER -->
    <footer class="container-fluid bg-dark-color" id="footer">
      <div class="container">
        <div class="row">
          <!-- FOOTER TOP -->
          <div class="col-12" id="footer-top">
            <div class="row justify-content-between">
              <div class="col-4">
                <h2>
                  Hotel
                </h2>
              </div>
              <div class="col-4" id="social-icons">
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-youtube"></i>
                <i class="bi bi-twitter"></i>
              </div>
            </div>
          </div>
          <!-- FOOTER DETAILS -->
          <div class="col-12" id="footer-details">
            <div class="row">
              <div class="col-12 col-md-4" id="news-container">
                <h4>Fique por dentro das novidades</h4>
                <p class="secondary-color">
                  Melhores Ofertas em primeira mão
                </p>
                <form>
                  <div class="mb-3">
                    <input
                      type="email"
                      class="form-control"
                      placeholder="Digite o seu e-mail"
                    />
                  </div>
                  <button class="btn btn-dark">Enviar</button>
                </form>
              </div>
              <div class="col-12 col-md-4" id="contact-container">
                <h4>Formas de contato</h4>
                <p class="secondary-color">(84)9999-9999</p>
                <p class="secondary-color">contato@hotel.com</p>
              </div>
              <div class="col-12 col-md-4" id="links-container">
                <div class="row">
                  <h4>Você pode estar buscando por:</h4>
                  <div class="col-6">
                    <ul class="list-unstyled">
                      <li><a href="#" class="secondary-color">Eventos</a></li>
                      <li><a href="#" class="secondary-color">Acomodações</a></li>
                      <li><a href="#" class="secondary-color">Vendas</a></li>
                    </ul>
                  </div>
                  <div class="col-6">
                    <ul class="list-unstyled">
                      <li><a href="#" class="secondary-color">Contratar</a></li>
                      <li>
                        <a href="#" class="secondary-color">Trabalhe conosco</a>
                      </li>
                      <li><a href="#" class="secondary-color">Contato</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- FOOTER BOTTOM -->
          <div class="col-12" id="footer-bottom">
            <div class="row justify-content-between">
              <div class="col-12 col-md-3">
                <p class="secondary-color">Hotel &copy; 2022</p>
              </div>
              <div class="col-12 col-md-3">
                <p class="secondary-color">
                  Contando com as melhores acomodações
                  <i class="bi bi-heart"></i>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    </body>
</html>
