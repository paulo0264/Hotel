<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Add_quartoModel;

class Add_quartoController extends Controller
{
    public function index(){
        return view('quarto');
    }

    public function create(){
        return view('quarto');
    }

    public function store(Request $request){
        $quarto = new Add_quartoModel;

        $quarto->name = $request->name;
        $quarto->description = $request->description;
        $quarto->price = $request->price;
        $quarto->image = $request->image;

        $quarto->save();

        return redirect('/add_quarto');
    }
/*
    public function edit(Quarto $quarto){
    return view('');
    }

    public function update(Quarto $quarto, Request $request){
    //
    }

    public function destroy(Quarto $quarto){

    }*/
}
