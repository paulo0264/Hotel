@extends('layouts.admin')

@section('title', 'Editar Quartos')


@section('content')

<main class="mt-5 pt-5">

    <div class="container">
        <h2 class="mb-3">Adicionar Quartos</h2>
        <form action="{{route('atualizar_quarto', ['id'=>$quarto->id])}}" method="POST">
            @csrf
            <div class="form-group">
                <label>Acomodação</label>
                <input class="form-control" name="name" value="{{$quarto->name}}" />
            </div>

            <div class="form-group">
                <label>Preço</label>
                <input class="form-control" name="price" value="{{$quarto->price}}" />
            </div>

            <div class="form-group">
                <label>Imagem</label>
                <input type="file" class="form-control" name="image" value="{{$quarto->image}}" />
            </div>

            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                <textarea class="form-control" type="text" name="description" value="{{$quarto->description}}" rows="3"></textarea>
            </div>


            <input class="btn btn-primary mt-3" type="submit" value="Salvar">
            <a href="{{ url()->previous() }}" class="btn btn-danger mt-3" aria-current="page">Cancelar</a>
            <form>
    </div>
</main>

@endsection
