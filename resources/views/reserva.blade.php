@extends('layouts.admin')

@section('title', 'Reserva')


@section('content')

<main class="mt-5 pt-5">
    <div class="container-fluid">
        <form action="" method="post">
            <label for="nim">Nome</label>
            <input type="text" class="form-control">

            <label for="nim">Cpf</label>
            <input type="text" class="form-control">

            <label for="">Quartos</label>
            <select name="" id="" class="form-select">
                <option value="">Quarto Duplo</option>
                <option value="">Quarto Luxo 326</option>
                <option value="">Quarto Luxo 256</option>
            </select>

            <label for="nim">Endereço</label>
            <input type="text" class="form-control">

            <input class="btn btn-primary mt-3" type="submit" value="Cadastrar">
        </form>
    </div>
</main>

@endsection
