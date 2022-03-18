<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reserva;

class ReservaController extends Controller
{
    public function index(){

        return view('reserva');
    }

    public function create(){
        return view('reserva');
    }

    public function store(Request $request){

        $data = [
            'name' => request('name'),
            'cpf' => request('cpf'),
            'nascimento' => request('nascimento'),
            'telefone' => request('telefone'),
            'endereco' => request('endereco'),
            'quarto' => request('quarto'),
            'checkin' => request('checkin'),
            'checkout' => request('checkout')
            ];

            Reserva::create($data);

<<<<<<< HEAD
        return redirect('/reserva')->with('success', "Reserva Cadastrada com sucesso!");

=======
        return redirect('/reserva');
>>>>>>> refs/remotes/origin/master
    }

    public function show(){

        //$data = Reserva::all();
        $data = Reserva::latest()->paginate(3);

        return view('/dashboard', ['reservas'=>$data]);
    }

    public function destroy($id){

        $data = Reserva::findOrFail($id);
        $data->delete();

<<<<<<< HEAD
        return redirect('/dashboard')->with('delete', "Reserva Excluída com sucesso!");
=======
        return "Apartamento Excluido com sucesso!!!!!";
>>>>>>> refs/remotes/origin/master
    }

    public function edit($id){

        $data = Reserva::findOrFail($id);

        return view('/editar_reserva', ['reserva'=>$data]);
    }

    public function update(Request $request, $id){

        $data = Reserva::findOrFail($id);
        $data->update([
            'name' => request('name'),
            'cpf' => request('cpf'),
            'nascimento' => request('nascimento'),
            'telefone' => request('telefone'),
            'endereco' => request('endereco'),
            'quarto' => request('quarto'),
            'checkin' => request('checkin'),
            'checkout' => request('checkout')
        ]);

        return redirect('/dashboard')->with('edit', "Reserva Atualizada com sucesso!");
    }
}
