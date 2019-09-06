<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tarefa;

class TarefasController extends Controller
{
    public function index(){
        //return Tarefa::where('id','>',1)->get();
        //capturar tarefas do bd
        $tarefas = Tarefa::all();
        //retornar a view com as tarefas como parâmetro
        //return view('tarefas.index',['tarefas' => $tarefas]);
        return view('tarefas.index',compact('tarefas'));
    }
    public function create(){
        return view('tarefas.create');
    }
    public function edit($id){
        //carregar a tarefa de $id
        $tarefa = Tarefa::find($id);

        //retornar a view para editar a tarefa
        return view('tarefas.edit',compact('tarefa'));
    }
    public function store(){
        //criando nova tarefa
        $t = new Tarefa();

        //atribuindo o texto
        $t->texto = request('texto');

        //salvar na base
        $t->save();

        //retornando para a lista de tarefas
        return redirect('/tarefas');
    }
    public function update($id){
        //recuperando a tarefa no bd
        $tarefa = Tarefa::find($id);

        //alterando o texto
        $tarefa->texto = request('texto');

        //salvando alteração no bd
        $tarefa->save();

        //retornando a view que lista as tarefas
        return redirect('/tarefas');
    }
}
