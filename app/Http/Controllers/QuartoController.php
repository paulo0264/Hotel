<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quarto;

class QuartoController extends Controller
{
    /*public function index(){
        $quartos = Quarto::all();

        return view('quarto.ver', ['quartos'=>$quartos]);
    }*/

    public function index(){

        $quartos = Quarto::all();

        return view('quarto.ver', ['quartos'=>$quartos]);
    }

    public function create(){
        return view('/quarto');
    }

    public function store(Request $request){

        Quarto::create($request->all());

        return redirect('quarto.ver')->with('success', "Acomodação Cadastrada com sucesso!");
    }

    public function destroy($id){

        $quarto = quarto::find($id);
        $quarto->delete();

        return redirect('/quarto')->with('delete', "Reserva Excluída com sucesso!");

    }

    public function edit($id){

        $quarto = Quarto::find($id);

        return view('/editar_quarto', ['quarto'=>$quarto]);
    }

    public function update(Request $request){

        Quarto::findOrFail($request->id)->update($request->all());

        return redirect('/quarto')->with('edit', "Acomodação Atualizada com sucesso!");
    }
}
