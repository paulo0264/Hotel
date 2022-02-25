@extends('layouts.main')

@section('title', 'Luxo')

@section('content')


<!-- DESTAQUES -->
<div class="container" id="opcoes">

    <div class="container mb-3">
        <div class="col-12">
            <h2 class="title primary-color">Pre-Reserva</h2>
        </div>
        <form action="/welcome" method="POST">
            @csrf
            <div class="row mt-3">
                <div class="col-3">
                    <label for="validationCustom01">Check-in:</label>
                    <input type="date" class="form-control" name="check_in" id="validationCustom01"
                        placeholder="Please Enter Price" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-3">
                    <label for="validationCustom02">Check-out:</label>
                    <input type="date" class="form-control" name="check_out" id="validationCustom02"
                        placeholder="Please Enter Price" required />
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
            <div class="col-5">
                <label for="validationCustomUsername">Nome Completo:</label>
                <input class="form-control" name="name" id="validationCustomUsername" placeholder="Nome" required />
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-5">
                <label for="validationCustomUsername">Telefone:</label>
                <input class="form-control" name="telefone" id="validationCustomUsername" placeholder="Telefone"
                    required />
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>
            <div class="col-5">
                <label for="validationCustomUsername">E-mail:</label>
                <input class="form-control" name="email" id="validationCustomUsername" placeholder="Email" required />
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-5">
                <label for="">Quarto:</label>
                <select name="quarto" id="" class="form-select">
                    <option value="Quarto Duplo">Luxo</option>
                </select>
            </div>
            <input class="btn btn-primary mt-3" type="submit" value="Enviar">
        </form>
    </div>

</div>


@endsection
