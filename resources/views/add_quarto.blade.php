@extends('layouts.admin')

@section('title', 'Quartos')


@section('content')

<main class="mt-5 pt-5">

    <div class="container">
        <h2 class="mb-3">Adicionar Quartos</h2>
        <form action="/add_quarto" method="POST">
            @csrf
            <div class="form-group">
                <label>Acomodação</label>
                <input class="form-control" name="name" />
            </div>

            <div class="form-group">
                <label>Preço</label>
                <input class="form-control" name="price" />
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
</main>

@endsection
