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
                    <th></th>
                    <th>AÇÕES</th>
                    <th></th>
                </thead>
                <tbody>
                @foreach($reservas as $reserva)
                    <tr>
                        <td>{{$reserva->id}}</td>
                        <td>{{$reserva->name}}</td>
                        <td>{{$reserva->quarto}}</td>
                        <td>{{$reserva->checkin}}</td>
                        <td>{{$reserva->checkout}}</td>
                        <td>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                <a href="{{ route('editar_reserva', ['id'=>$reserva->id])}}" title="Editar Acomodação" class="btn btn-sm btn-primary" role="button"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                <a href="{{ route('editar_reserva', ['id'=>$reserva->id])}}" title="Editar Acomodação" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <a title="Excluir Acomodação" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- Modal Excluir -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Excluir</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            Tem certeza que Deseja Excluir essa Reserva?
      </div>
      <div class="modal-footer">
        <a href="{{ url()->previous() }}" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</a>
        <a href="{{ route('reserva', ['id'=>$reserva->id])}}" class="btn btn-danger">Deletar</a>
      </div>
    </div>
  </div>
</div>

@endsection
