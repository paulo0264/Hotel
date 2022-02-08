<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Styles -->
        <link rel="stylesheet" href="/css/styles.css">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />


        <!-- Scripts -->
        <script src="/js/script.js"></script>
    </head>
    <body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i class="fas fa-hotel"></i> Hotel</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active">Home</a>
                <a href="register" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Usuario</a>      
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Cadastrar Hospedes</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Reservar/Hospedar</a>
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">Historico</a>
                @auth
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold""
                            onclick="event.preventDefault();
                            this.closest('form').submit();">Sair</a>
                    </form>
                @endauth
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    @auth
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <a href="/logout" class="dropdown-item"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();">Sair</a>
                                    </form>
                                    @endauth
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container-fluid px-4">
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">8</h3>
                                <p class="fs-5">Hospedes</p>
                            </div>
                            <i class="fas fa-users fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">10</h3>
                                <p class="fs-5">Apartamentos</p>
                            </div>
                            <i
                                class="fas fa-hotel fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">4</h3>
                                <p class="fs-5">Check-in</p>
                            </div>
                            <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">3</h3>
                                <p class="fs-5">Check-out</p>
                            </div>
                            <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
    </div>

    <!--<header class="col-md-12 menu">
    <nav class="navbar navbar-expand-lg navbar-light">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <a href="/" class="navbar-brand navbar">
                <img src="/img/hotel.png" alt="Logo">
            </a>
            <div class="mx-auto"></div>
                <ul class="navbar-nav" id="navbar">

                @auth
                    <li class="nav-item">
                        <a href="/dashboard" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="/cadastro_quarto" class="nav-link"> Cadastrar Quartos</a>
                    </li>
                    <li class="nav-item">
                        <a href="/cadastro_hospede" class="nav-link">Cadastrar Clientes</a>
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
    </nav>
</header> -->

        @yield('content')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
        <script>
            var el = document.getElementById("wrapper");
            var toggleButton = document.getElementById("menu-toggle");

            toggleButton.onclick = function () {
                el.classList.toggle("toggled");
            };
        </script>
    </body>
</html>
