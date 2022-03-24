<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reserva;

class ReservaController extends Controller
{
    public function index(){

        $reservas = Reserva::paginate(3);

        return view('dashboard', ['reservas'=>$reservas]);


        return view('dashboard');
    }

    public function create(){
        return view('/reserva/create');
    }

    public function store(Request $request){

        $data = new Reserva;

        $data-> name = $request->name;
        $data-> cpf = $request->cpf;
        $data-> nascimento = $request->nascimento;
        $data-> telefone = $request->telefone;
        $data-> endereco = $request->endereco;
        $data-> quarto = $request->quarto;
        $data-> checkin = $request->checkin;
        $data-> checkout = $request->checkout;


        //salvando no Banco
        $data->save();

        return redirect('dashboard')->with('success', "Reserva Cadastrada com sucesso!");

    }

    /*public function show(){

        //$data = Reserva::all();
        $reservas = Reserva::latest()->paginate(3);

        return view('dashboard', ['reservas'=>$reservas]);
    }*/
    public function destroy($id){

        $reserva = Reserva::find($id);
        $reserva->delete();

        return redirect('/dashboard')->with('delete', "Reserva Excluída com sucesso!");
    }

    public function edit($id){
        if(!$reserva = Reserva::find($id)){
            return redirect()->back();
        }

        return view('/editar_reserva', compact('reserva'));

    }

    public function update(Request $request, $id){

        $store = new Reserva;

        $store-> name = $request->name;
        $store-> cpf = $request->cpf;
        $store-> nascimento = $request->nascimento;
        $store-> telefone = $request->telefone;
        $store-> endereco = $request->endereco;
        $store-> quarto = $request->quarto;
        $store-> checkin = $request->checkin;
        $store-> checkout = $request->checkout;

         //save new customer
         $store->save();

        return redirect('/dashboard')->with('edit', "Reserva Atualizada com sucesso!");
    }
}
