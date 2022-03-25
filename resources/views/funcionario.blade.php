@extends('layouts.admin')

@section('title', 'Cadastrar Funcionario')


@section('content')

<main class="mt-5 pt-5">
    <div class="container-fluid">
        <div class="container mt-5">
            <a href="/funcionario" class="btn btn-primary btn-md mb-3" data-bs-toggle="modal" data-bs-target="#funcionarioModal">Novo Funcionário</a>
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
                    <th>ENDEREÇO</th>
                    <th>CARGO</th>
                    <th>TELEFONE</th>
                    <th>AÇÕES</th>
                    <th></th>
                </thead>

            </table>

        </div>
    </div>
</main>


<!-- Modal ECadastrar Funcionario -->
<div class="modal fade" id="funcionarioModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title" id="exampleModalLabel">Cadastrar Novo Funcionário</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div>
                    <form action="" method="post">
                        <div class="col-md-8">
                            <label for="inputEmail4" class="form-label">Nome</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-8">
                            <label for="inputrg4" class="form-label">RG</label>
                            <input type="text" class="form-control" id="inputrg4">
                        </div>
                        <div class="col-md-8">
                            <label for="inputEmail4" class="form-label">Cpf</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-8">
                            <label for="inputEmail4" class="form-label">Endereço</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-8">
                            <label for="inputEmail4" class="form-label">Cargo</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-8">
                            <label for="inputEmail4" class="form-label">Data de Adimição</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                        <div class="col-md-8">
                            <label for="inputEmail4" class="form-label">Telefone</label>
                            <input type="email" class="form-control" id="inputEmail4">
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <input class="btn btn-danger mt-3" type="submit" value="Cancelar">
                <input class="btn btn-primary mt-3" type="submit" value="Cadastrar">
            </div>
        </div>
    </div>
</div>

@endsection
