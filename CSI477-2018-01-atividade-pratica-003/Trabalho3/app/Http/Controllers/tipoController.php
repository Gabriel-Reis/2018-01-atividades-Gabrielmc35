<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\tipoveiculo;

class tipoController extends Controller
{
    public function index()
    {
        $tipoveiculo = tipoveiculo::orderBy('id')->get();
        return view('tipoveiculo.index') ->with('tipoveiculo', $tipoveiculo);
    }
  
    public function create()
    {
        return view('tipoveiculo.create');
    }
  
    public function store(Request $request)
    {
        $veiculo = new tipoveiculo;
        $veiculo->nome = $request->nome;
        $veiculo->tipo        = 	$request->tipo;
        $veiculo->valor       = $request->valor;
        $veiculo->save();
        return redirect()->route('tipoveiculo.index')->with('message', 'Veiculo cadastrado com sucesso!');
    }
  
public function show(tipoveiculo $tipoveiculo) 
    {
        return view('tipoveiculo.show')
                ->with('tipoveiculo', $tipoveiculo);    }
  
public function edit(tipoveiculo $tipoveiculo) 
    {
       return view('tipoveiculo.edit')
                ->with('tipoveiculo', $tipoveiculo);
    }
  
    public function update(Request $request, tipoveiculo $tipoveiculo)
    {
        $tipoveiculo->nome= $request->nome;
        $tipoveiculo->tipo        = $request->tipo;
        $tipoveiculo->valor       = $request->valor;
        $tipoveiculo->save();
/*
        //dd($request->all());
        //$estado->nome = $request->nome;
        $tipoveiculo->fill($request->all());
        //dd($estado);
        $tipoveiculo->save();
        */
        session()->flash('mensagem', 'Carro atualizado com sucesso!');

        return redirect()->route('tipoveiculo.show', $tipoveiculo->id);
    }
  
    public function destroy($tipoveiculo)
    {
        $veiculo = tipoveiculo::findOrFail($tipoveiculo);
        $veiculo->delete();
        return redirect()->route('tipoveiculo.index')->with('alert-success','Veiculo foi  deletado com sucesso 	!');
    }
}
