<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reserva;

class ReservaController extends Controller
{

    public function index(){

        $reservas = Reserva::paginate(4);

        return view('dashboard', ['reservas'=>$reservas]);
    }

    public function show($id){

        $reserva = Reserva::table('reservas')->where('id','=', Reserva::id()->id)->get();

        return view('user.ver', ['reserva'=>$reserva]);
    }

    public function create(){
        return view('/reserva/create');
    }

    public function store(Request $request){

        Reserva::create($request->all());

        return redirect('dashboard')->with('success', "Reserva Cadastrada com sucesso!");

    }

    public function edit($id){
        $reserva = Reserva::find($id);

        return view('editar_reserva',['reserva'=>$reserva]);
    }

    public function update(Request $request){
        Reserva::findOrFail($request->id)->update($request->all());

        return redirect('dashboard')->with('edit', "Reserva Atualizada com sucesso!");
    }

    public function destroy($id){

        $reserva = Reserva::find($id);
        $reserva->delete();

        return redirect('dashboard')->with('delete', "Reserva Excluída com sucesso!");

    }

}
