<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Luxo;

class LuxoController extends Controller
{
    public function index(){
        return view('luxo');
    }

    public function create(){
        return view('luxo');
    }

    public function store(Request $request){
        $luxo = new Luxo;

        $luxo->check_in = $request->check_in;
        $luxo->check_out = $request->check_out;
        $luxo->name = $request->name;
        $luxo->telefone = $request->telefone;
        $luxo->email = $request->email;
        $luxo->quarto = $request->quarto;

        $welcomeModel->save();

        return redirect('/');
    }
}
