@extends('layouts.admin')

@section('title', 'Dashboard')


@section('content')

    <!-- offcanvas -->
    <main class="mt-5 pt-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <h4>Dashboard</h4>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <div class="card bg-primary text-white h-100">
              <h2 class="card-body py-3">25</h2>
              <div class="card-footer d-flex">
              Hospedes
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-warning text-dark h-100">
            <h2 class="card-body py-3">15</h2>
              <div class="card-footer d-flex">
                Quartos
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-success text-white h-100">
                <h2 class="card-body py-3">8</h2>
              <div class="card-footer d-flex">
                Check-in
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <div class="card bg-danger text-white h-100">
                <h2 class="card-body py-3">2</h2>
              <div class="card-footer d-flex">
                Check-out
                <span class="ms-auto">
                  <i class="bi bi-chevron-right"></i>
                </span>
              </div>
            </div>
          </div>
        </div>

        <div class="container mt-5">
            <a href="/reserva" class="btn btn-primary btn-md mb-3">Nova Reserva</a>

            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>NOME</th>
                    <th>RESERVADO</th>
                    <th>CHECK-IN</th>
                    <th>CHECK-OUT</th>
                    <th>AÇÕES</th>
                </thead>
                <tbody>
                    <tr>
                        <td>45</td>
                        <td>Antonio Jose alves</td>
                        <td>Apartamento Luxo 386</td>
                        <td>20/10/2022</td>
                        <td>20/12/2022</td>
                        <td>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <a href="" class="btn btn-sm btn-primary">Ver</a>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a href="" class="btn btn-sm btn-warning">Editar</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>52</td>
                        <td>Maria jose dos santos</td>
                        <td>Apartamento Duplo 465</td>
                        <td>20/05/2022</td>
                        <td>20/06/2022</td>
                        <td>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <a href="" class="btn btn-sm btn-primary">Ver</a>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a href="" class="btn btn-sm btn-warning">Editar</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection
