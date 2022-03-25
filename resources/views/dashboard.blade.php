@extends('layouts.admin')

@section('title', 'Dashboard')


@section('content')

<!-- offcanvas -->
<main class="mt-5 pt-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h4>Dashboard</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-3">
                <div class="card bg-primary text-white h-100">
                    <h2 class="card-body py-3">5</h2>
                    <div class="card-footer d-flex">
                        Hospedes
                        <span class="ms-auto">
                            <i class="bi bi-chevron-right"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card bg-warning text-dark h-100">
                    <h2 class="card-body py-3">15</h2>
                    <div class="card-footer d-flex">
                        Quartos
                        <span class="ms-auto">
                            <i class="bi bi-chevron-right"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card bg-success text-white h-100">


                    <h2 class="card-body py-3">2</h2>

                    <div class="card-footer d-flex">
                        Check-in
                        <span class="ms-auto">
                            <i class="bi bi-chevron-right"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-3">
                <div class="card bg-danger text-white h-100">
                    <h2 class="card-body py-3">2</h2>
                    <div class="card-footer d-flex">
                        Check-out
                        <span class="ms-auto">
                            <i class="bi bi-chevron-right"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <a href="" class="btn btn-primary btn-md mb-3" data-bs-toggle="modal" data-bs-target="#cadastrarModal" >Nova Reserva</a>
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
            @if(session()->has('delete'))
            <div class="alert alert-danger">
                <p>{{session('delete')}}</p>
            </div>
            @endif


            <table class="table table-striped table-hover table-bordered">
                <thead class="table-dark">
                    <th>ID</th>
                    <th>NOME</th>
                    <th>RESERVADO</th>
                    <th>CHECK-IN</th>
                    <th>CHECK-OUT</th>
                    <th></th>
                    <th>AÇÕES</th>
                    <th></th>
                </thead>
                @foreach($reservas as $reserva)
                <tbody>
                    <tr>
                        <td>{{$reserva->id}}</td>
                        <td>{{$reserva->name}}</td>
                        <td>{{$reserva->quarto}}</td>
                        <td>{{$reserva->checkin}}</td>
                        <td>{{$reserva->checkout}}</td>
                        <td>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <a  href="{{ route('user.ver',['id'=>$reserva]) }}" title="Ver Acomodação" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#verModal" role="button"><i class="bi bi-eye"></i></a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <a href="{{ route('editar_reserva',['id'=>$reserva->id]) }}" data-bs-toggle="modal" data-bs-target="#editarModal"
                                        title="Editar Acomodação" class="btn btn-sm btn-warning"><i class="bi bi-pencil-square"></i></a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="row">
                                <div class="col d-flex justify-content-center">
                                    <a title="Excluir Acomodação" class="btn btn-sm btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal"><i class="bi bi-trash-fill"></i></a>
                                </div>
                            </div>
                        </td>
                    </tr>

                    <!-- Modal Editar-->
<div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h2 class="mb-3">Editar Reserva</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container mb-4">

                    <form action="{{route('atualizar_reserva', ['id'=>$reserva->id])}}" method="POST">
                    @csrf

                        <label for="nim">Nome:</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Nome" required autofocus autocomplete="nome" value="{{$reserva->name}}">

                        <label for="nim">Cpf:</label>
                        <input type="text" id="cpf" name="cpf" class="form-control" placeholder="Cpf" required autofocus autocomplete="cpf" value="{{$reserva->cpf}}">

                        <label for="nim">Data de Nascimento:</label>
                        <input type="date" id="nascimento" name="nascimento" class="form-control" placeholder="Nascimento" required autofocus autocomplete="nascimento" value="{{$reserva->nascimento}}">

                        <label for="nim">Telefone:</label>
                        <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone" required autofocus autocomplete="telefone" value="{{$reserva->telefone}}">

                        <label for="nim">Endereço:</label>
                        <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço" required autofocus autocomplete="endereco" value="{{$reserva->endereco}}">

                        <label>Quartos:</label>
                        <select type="text" id="quarto" name="quarto" id="" class="form-select" placeholder="Quarto" required autofocus autocomplete="quarto" value="{{$reserva->quarto}}">
                            <option value="Quarto Luxo 326">Acomodação Simples</option>
                            <option value="Quarto Luxo 256">Acomodação Luxo</option>
                            <option value="Quarto Luxo 256">Acomodação Super Luxo</option>
                        </select>

                        <div class="row">
                            <div class="col">
                                <label>Check-in:</label>
                                <input type="date" class="form-control" id="checkin" name="checkin" placeholder="Please Enter Price" placeholder="Check-in" required autofocus autocomplete="checkin" value="{{$reserva->checkin}}"/>
                            </div>
                            <div class="col">
                                <label>Check-out:</label>
                                <input type="date" class="form-control" id="checkout" name="checkout" placeholder="Please Enter Price" placeholder="Check-out" required autofocus autocomplete="checkout" value="{{$reserva->checkout}}"/>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ url()->previous() }}" class="btn btn-warning" data-bs-dismiss="modal">Voltar</a>
                            <input class="btn btn-primary mt-3" type="submit" value="Atualizar">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                    <!-- Modal Excluir -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Excluir</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Tem certeza que Deseja Excluir essa Reserva?
            </div>
            <div class="modal-footer">
                <form action="{{ route('dashboard.destroy', $reserva->id) }}" method="post">
                    @csrf
                    <div class="form-item center">
                        <a href="{{ url()->previous() }}" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
                </tbody>
                @endforeach
                    @if (count($reservas) == 0)
                        <h3>Não há Contatos Cadastrados</h3>
                    @endif
            </table>

        </div>
    </div>
    {{ $reservas->links('vendor.pagination.custon') }}
</main>

<!-- Modal Cadastrar-->
<div class="modal fade" id="cadastrarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h2 class="mb-3">Realizar Reserva</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container mb-4">

                    <form action="{{ route('salvar_reserva') }}" method="post">
                    @csrf
                        <label for="nim">Nome:</label>
                        <input type="text" id="name" name="name" class="form-control" placeholder="Nome" required autofocus autocomplete="nome">

                        <label for="nim">Cpf:</label>
                        <input type="text" id="cpf" name="cpf" class="form-control" placeholder="Cpf" required autofocus autocomplete="cpf">

                        <label for="nim">Data de Nascimento:</label>
                        <input type="date" id="nascimento" name="nascimento" class="form-control" placeholder="Nascimento" required autofocus autocomplete="nascimento">

                        <label for="nim">Telefone:</label>
                        <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone" required autofocus autocomplete="telefone">

                        <label for="nim">Endereço:</label>
                        <input type="text" id="endereco" name="endereco" class="form-control" placeholder="Endereço" required autofocus autocomplete="endereco">

                        <label>Quartos:</label>
                        <select type="text" id="quarto" name="quarto" id="" class="form-select" placeholder="Quarto" required autofocus autocomplete="quarto">
                            <option value="Quarto Luxo 326">Acomodação Simples</option>
                            <option value="Quarto Luxo 256">Acomodação Luxo</option>
                            <option value="Quarto Luxo 256">Acomodação Super Luxo</option>
                        </select>

                        <div class="row">
                            <div class="col">
                                <label>Check-in:</label>
                                <input type="date" class="form-control" id="checkin" name="checkin" placeholder="Please Enter Price" placeholder="Check-in" required autofocus autocomplete="checkin" />
                            </div>
                            <div class="col">
                                <label>Check-out:</label>
                                <input type="date" class="form-control" id="checkout" name="checkout" placeholder="Please Enter Price" placeholder="Check-out" required autofocus autocomplete="checkout" />
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{ url()->previous() }}" class="btn btn-warning" data-bs-dismiss="modal">Voltar</a>
                            <input class="btn btn-primary mt-3" type="submit" value="Cadastrar">
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal Visualizar-->
<div class="modal fade" id="verModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Dados da Reserva</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                @if($reserva)
                <ul class="list-group">
                    <li class="list-group-item">{{$reserva->id}}</li>
                    <li class="list-group-item">{{$reserva->name}}</li>
                    <li class="list-group-item">{{$reserva->cpf}}</li>
                    <li class="list-group-item">{{$reserva->nascimento}}</li>
                    <li class="list-group-item">{{$reserva->telefone}}</li>
                    <li class="list-group-item">{{$reserva->endereco}}</li>
                    <li class="list-group-item">{{$reserva->quarto}}</li>
                    <li class="list-group-item">{{$reserva->checkin}}</li>
                    <li class="list-group-item">{{$reserva->checkout}}</li>
                </ul>

                @endif

            </div>
            <div class="modal-footer">
                <a href="{{ url()->previous() }}" class="btn btn-warning" data-bs-dismiss="modal">Voltar</a>
            </div>
        </div>
    </div>
</div>



@endsection
