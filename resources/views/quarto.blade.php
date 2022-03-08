@extends('layouts.admin')

@section('title', 'Quartos')


@section('content')

<main class="mt-5 pt-5">
    <div class="container-fluid">
        <div class="container mt-5">
            <a href="/add_quarto" class="btn btn-primary btn-md mb-3">Novo Quarto</a>

            <table class="table table-striped table-hover table-bordered">

                <thead class="table-dark">
                    <th>ID</th>
                    <th>NOME</th>
                    <th>DESCRIÇÃO</th>
                    <th>PREÇO</th>
                    <th>AÇÕES</th>
                    <th></th>
                </thead>
                <tbody>
                @foreach($quartos as $quarto)
                    <tr>
                        <td>{{$quarto->id}}</</td>
                        <td>{{$quarto->name}}</td>
                        <td>{{$quarto->description}}</</td>
                        <td>{{$quarto->price}}</</td>
                        <td>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                <a href="{{ route('editar_quarto', ['id'=>$quarto->id])}}" title="Editar Acomodação" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
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
            Tem certeza que Deseja Excluir a Acomodação?
      </div>
      <div class="modal-footer">
        <a href="{{ url()->previous() }}" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</a>
        <a href="{{ route('quarto', ['id'=>$quarto->id])}}" class="btn btn-danger">Deletar</a>
      </div>
    </div>
  </div>
</div>


@endsection
