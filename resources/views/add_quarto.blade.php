@extends('layouts.admin')

@section('title', 'Quartos')


@section('content')

<main class="mt-5 pt-5">

    <div class="container">
    <h2 class="mb-3">Adicionar Quartos</h2>
    <form action="admin/category_room/addpost" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="hidden" name="_token" value="{">

        <div class="form-group">
            <label>Acomodação</label>
            <input class="form-control" name="name"  />
        </div>

        <div class="form-group">
            <label>Imagem</label>
            <input type="file" class="form-control" name="image"  />
        </div>

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>


        <button type="button" class="btn btn-primary mt-3">Cadastrar</button>
    <form>
    </div>
</main>

@endsection
