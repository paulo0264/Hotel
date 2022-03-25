@extends('layouts.admin')

@section('title', 'Quartos')


@section('content')

<main class="mt-5 pt-5">
    <div class="container-fluid">
        <div class="container mt-5">
            <a href="/funcionario" class="btn btn-primary btn-md mb-3" data-bs-toggle="modal" data-bs-target="#cadastrarModal">Adicionar Apartamento</a>
            @if(session()->has('delete'))
            <div class="alert alert-danger">
                <p>{{session('delete')}}</p>
            </div>
            @endif
            @if(session()->has('success'))
            <div class="alert alert-success">
                <p>{{session('success')}}</p>
            </div>
            @endif
            @if(session()->has('edit'))
            <div class="alert alert-success">
                <p>{{session('edit')}}</p>
            </div>
            @endif

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

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                <a href="" title="Editar Acomodação" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editarModal"><i class="bi bi-pencil-square"></i></a>
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
                </tbody>
            </table>

        </div>
    </div>
</main>


<!-- Modal Cadastrar-->
<div class="modal fade" id="cadastrarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h2 class="mb-3">Reali</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <h2 class="mb-3">Adicionar Quartos</h2>
                    <form action="{{ route('salvar_quarto') }}" method="POST" enctype="multpart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Acomodação</label>
                            <input type="text" class="form-control" name="name" placeholder="Nome" required autofocus autocomplete="nome" />
                        </div>

                        <div class="form-group">
                            <label>Valor</label>
                            <input class="form-control" name="price" placeholder="Valor" required autofocus autocomplete="valor"/>
                        </div>

                        <div class="form-group">
                            <label>Imagem</label>
                            <input type="file" class="form-control" name="image" />
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>


                        <input class="btn btn-primary mt-3" type="submit" value="Cadastrar">
                        <form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Editar-->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h2 class="mb-3">Reali</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="container">
                    <h2 class="mb-3">Editar Apartamento</h2>
                   <form action="" method="POST">
                       @csrf
                       <div class="form-group">
                           <label>Acomodação</label>
                           <input class="form-control" name="name" value="" />
                       </div>

                       <div class="form-group">
                           <label>Preço</label>
                           <input class="form-control" name="price" value="" />
                       </div>

                       <div class="form-group">
                           <label>Imagem</label>
                           <input type="file" class="form-control" name="image" value="" />
                       </div>

                       <div class="mb-3">
                           <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                           <textarea class="form-control" type="text" name="description" value="" rows="3"></textarea>
                       </div>


                       <input class="btn btn-primary mt-3" type="submit" value="Salvar">
                       <a href="{{ url()->previous() }}" class="btn btn-danger mt-3" aria-current="page">Cancelar</a>
                       <form>
               </div>
            </div>
        </div>
    </div>
</div>



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
        <form action="" method="post">
            @csrf
            <div class="form-item center">
                <a href="{{ url()->previous() }}" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
