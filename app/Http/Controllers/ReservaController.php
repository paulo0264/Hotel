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

        /*$data = new Quarto;

            $data->name = $request->name;
            $data->price = $request->price;
            $data->image = $request->image;
            $data->description = $request->description;

        $data->save();*/

        return redirect('/reserva');

        /*$reserva = new Reserva;

        $reserva->name = $request->name;
        $reserva->cpf = $request->cpf;
        $reserva->nascimento = $request->nascimento;
        $reserva->telefone = $request->telefone;
        $reserva->endereco = $request->endereco;
        $reserva->quarto = $request->quarto;
        $reserva->checkin = $request->checkin;
        $reserva->checkout = $request->checkout;

        $reserva->save();

        return redirect('/reserva');*/
    }

    public function show(){

        $data = Reserva::all();

        return view('/dashboard', ['reservas'=>$data]);
    }

    /*public function destroy($id){

        $data = Quarto::findOrFail($id);
        $data->delete();

        return "Apartamento Excluido com sucesso!!!!!";
    }*/

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

        return "Reserva Atualizado com sucesso!!!!!";
    }
}
