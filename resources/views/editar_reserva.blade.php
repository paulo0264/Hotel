@extends('layouts.admin')

@section('title', 'Editar Reserva')


@section('content')

<main class="mt-5 pt-5">

    <div class="container">
        <h2 class="mb-3">Editar Reserva</h2>
        <form action="{{route('atualizar_reserva', ['id'=>$reserva->id])}}" method="POST">
        @csrf
            <label for="nim">Nome:</label>
            <input type="text" name="name" class="form-control" value="{{$reserva->name}}">

            <label for="nim">Cpf:</label>
            <input type="text" name="cpf" class="form-control" value="{{$reserva->cpf}}">

            <label for="nim">Data de Nascimento:</label>
            <input type="date" name="nascimento" class="form-control" value="{{$reserva->nascimento}}">

            <label for="nim">Telefone:</label>
            <input type="text" name="telefone" class="form-control" value="{{$reserva->telefone}}">

            <label for="nim">Endereço:</label>
            <input type="text" name="endereco" class="form-control" value="{{$reserva->endereco}}">

            <label for="">Quartos:</label>
            <select type="text" name="quarto" id="" class="form-select" value="{{$reserva->quarto}}">
                <option value="Quarto Duplo">Quarto Duplo</option>
                <option value="Quarto Luxo 326">Quarto Luxo 326</option>
                <option value="Quarto Luxo 256">Quarto Luxo 256</option>
            </select>

            <div class="row">
                <div class="col">
                    <label>Check-in:</label>
                    <input type="date" class="form-control" name="checkin" placeholder="Please Enter Price" value="{{$reserva->checkin}}" />
                </div>
                <div class="col">
                    <label>Check-out:</label>
                    <input type="date" class="form-control" name="checkout" placeholder="Please Enter Price" value="{{$reserva->checkout}}" />
                </div>
            </div>

            <input class="btn btn-primary mt-3" type="submit" value="Atualizar">
            <a href="{{ url()->previous() }}" class="btn btn-danger mt-3" aria-current="page">Cancelar</a>
        </form>
    </div>
</main>

@endsection
