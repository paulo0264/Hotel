<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Quarto;

class QuartoController extends Controller
{
    public function index(){
        return view('/quarto');
    }

    public function create(){
        return view('/add_quarto');
    }

    public function store(Request $request){

        $data = [
            'name' => request('name'),
            'price' => request('price'),
            'image' => request('image'),
            'description' => request('description')
            ];

            Quarto::create($data);

        return redirect('/quarto');
    }

    public function show(){

        $data = Quarto::all();

        return view('/quarto', ['quartos'=>$data]);
    }

    public function destroy($id){

        $data = Quarto::findOrFail($id);
        $data->delete();

        return "Apartamento Excluido com sucesso!!!!!";
    }

    public function edit($id){

        $data = Quarto::findOrFail($id);

        return view('/editar_quarto', ['quarto'=>$data]);
    }

    public function update(Request $request, $id){

        $quarto = Quarto::findOrFail($id);
        $quarto->update([
            'name' => request('name'),
            'price' => request('price'),
            'image' => request('image'),
            'description' => request('description')
        ]);

        return "Apartamento Atualizado com sucesso!!!!!";
    }
}
