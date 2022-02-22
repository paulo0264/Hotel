<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\WelcomeModel;

class WelcomesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function create(){
        return view('welcome');
    }

    public function store(Request $request){
        $welcomeModel = new WelcomeModel;

        $welcomeModel->check_in = $request->check_in;
        $welcomeModel->check_out = $request->check_out;
        $welcomeModel->name = $request->name;
        $welcomeModel->telefone = $request->telefone;
        $welcomeModel->email = $request->email;
        $welcomeModel->quarto = $request->quarto;

        $welcomeModel->save();

        return redirect('/');
    }
}
