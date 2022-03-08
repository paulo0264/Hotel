@extends('layouts.admin')

@section('title', 'Cadastrar Funcionario')


@section('content')

<main class="mt-5 pt-5">
    <div class="container">
        <h2 class="mb-3">Cadastrar Funcionário</h2>
        <form action="" method="post">
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Nome</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Cpf</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Data de Nascimento</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Endereço</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Telefone</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Efetivação</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>


            <input class="btn btn-primary mt-3" type="submit" value="Cadastrar">
        </form>
    </div>
</main>

@endsection
