<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Aluno;
use App\Cidade;

class alunoController extends Controller
{
    public function index()
    {
        $aluno = aluno::orderBy('id')->get();
        return view('alunos.index') ->with('aluno', $aluno);
    }
  
    public function create()
    {
           $cidades = Cidade::orderBy('nome')->get();
      return view('alunos.create')
                ->with('cidades', $cidades);
    }
    
  
    public function store(Request $request)
    {
        $aluno = new aluno;
        $aluno->nome = $request->nome;
        $aluno->rua        =    $request->rua;
        $aluno->numero       = $request->numero;
        $aluno->bairro = $request->bairro;

        $aluno->cidade_id = $request->cidade_id;

        $aluno->cep = $request->cep;
        $aluno->mail = $request->mail;

        $aluno->save();
        return redirect()->route('alunos.index')->with('message', 'Aluno cadastrado com sucesso!');
    }
  
public function show(aluno $aluno) 
    {
        return view('alunos.show')
                ->with('aluno', $aluno);    }
  
public function edit(aluno $aluno) 
 
                  {
      // Estados
      $cidades = Cidade::orderBy('nome')->get();
      return view('alunos.edit')
          ->with('aluno', $aluno)
          ->with('cidades', $cidades);
    
    }
  
    public function update(Request $request, aluno $aluno)
    {
        $aluno->nome = $request->nome;
        $aluno->rua        =    $request->rua;
        $aluno->numero       = $request->numero;
        $aluno->bairro = $request->bairro;

        $aluno->cidade_id = $request->cidade_id;

        $aluno->cep = $request->cep;
        $aluno->mail = $request->mail;

        $aluno->save();
/*
        //dd($request->all());
        //$estado->nome = $request->nome;
        $tipoveiculo->fill($request->all());
        //dd($estado);
        $tipoveiculo->save();
        */
        session()->flash('mensagem', 'aluno atualizado com sucesso!');

        return redirect()->route('alunos.show', $aluno->id);
    }
  
    public function destroy($aluno)
    {
        $aluno = aluno::findOrFail($aluno);
        $aluno->delete();
        return redirect()->route('alunos.index')->with('alert-success','aluno foi  deletado com sucesso     !');
    }
}
