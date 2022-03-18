@extends('layouts.admin')

@section('title', 'Reserva')


@section('content')

<main class="mt-5 pt-5">

    <div class="container mb-4">
        <h2 class="mb-3">Realizar Reserva</h2>

            @if(session()->has('success'))
                <div class="alert alert-success">
                    <p>{{session('success')}}</p>
                </div>
            @endif

        <form action="/reserva" method="POST">
        @csrf
            <label for="nim">Nome:</label>
            <input type="text" name="name" class="form-control">

            <label for="nim">Cpf:</label>
            <input type="text" name="cpf" class="form-control">

            <label for="nim">Data de Nascimento:</label>
            <input type="date" name="nascimento" class="form-control">

            <label for="nim">Telefone:</label>
            <input type="text" name="telefone" class="form-control">

            <label for="nim">Endereço:</label>
            <input type="text" name="endereco" class="form-control">

            <label for="">Quartos:</label>
            <select type="text" name="quarto" id="" class="form-select">
                <option value="Quarto Luxo 326">Acomodação Simples</option>
                <option value="Quarto Luxo 256">Acomodação Luxo</option>
                <option value="Quarto Luxo 256">Acomodação Super Luxo</option>
            </select>

            <div class="row">
                <div class="col">
                    <label>Check-in:</label>
                    <input type="date" class="form-control" name="checkin" placeholder="Please Enter Price" />
                </div>
                <div class="col">
                    <label>Check-out:</label>
                    <input type="date" class="form-control" name="checkout" placeholder="Please Enter Price" />
                </div>
            </div>

            <input class="btn btn-primary mt-3" type="submit" value="Cadastrar">
        </form>
    </div>
</main>

@endsection
