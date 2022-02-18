@extends('layouts.admin')

@section('title', 'Quartos')


@section('content')

<main class="mt-5 pt-5">
      <div class="container-fluid">
        <div class="container mt-5">
            <a href="/add_quarto" class="btn btn-primary btn-md mb-3">Novo Quarto</a>

            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>NOME</th>
                    <th>RESERVADO</th>
                    <th>CHECK-IN</th>
                    <th>CHECK-OUT</th>
                    <th>AÇÕES</th>
                </thead>
                <tbody>
                    <tr>
                        <td>45</td>
                        <td>Antonio Jose alves</td>
                        <td>Apartamento Luxo 386</td>
                        <td>20/10/2022</td>
                        <td>20/12/2022</td>
                        <td>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <a href="" class="btn btn-sm btn-primary">Ver</a>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a href="" class="btn btn-sm btn-warning">Editar</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>52</td>
                        <td>Maria jose dos santos</td>
                        <td>Apartamento Duplo 465</td>
                        <td>20/05/2022</td>
                        <td>20/06/2022</td>
                        <td>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <a href="" class="btn btn-sm btn-primary">Ver</a>
                                </div>
                                <div class="col d-flex justify-content-center">
                                    <a href="" class="btn btn-sm btn-warning">Editar</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</main>

@endsection
