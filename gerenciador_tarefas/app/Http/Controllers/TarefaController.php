<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index()
    {
        $tarefas = Tarefa::all();
        return view('tarefas.index', compact('tarefas'));
    }

    public function create()
    {
        return view('tarefas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'Titulo' => 'required',
            'Descricao' => 'required',
        ]);

        Tarefa::create($request->all());
        return redirect()->route('tarefas.index')->with('success', 'Tarefa criada com sucesso.');
    }

    public function edit($i_a)
    {
        // Use a chave primária 'i_a' para encontrar a tarefa
        $tarefa = Tarefa::where('i_a', $i_a)->firstOrFail();
        return view('tarefas.edit', compact('tarefa'));
    }

    public function update(Request $request, $i_a)
    {
        $request->validate([
            'Titulo' => 'required',
            'Descricao' => 'required',
            'Status' => 'required|integer'
        ]);

        // Use a chave primária 'i_a' para encontrar a tarefa
        $tarefa = Tarefa::where('i_a', $i_a)->firstOrFail();
        $tarefa->update($request->all());
        return redirect()->route('tarefas.index')->with('success', 'Tarefa atualizada com sucesso.');
    }

    public function destroy($i_a)
    {
        // Use a chave primária 'i_a' para encontrar a tarefa
        $tarefa = Tarefa::where('i_a', $i_a)->firstOrFail();
        $tarefa->update(['Status' => -1]);
        return redirect()->route('tarefas.index')->with('success', 'Tarefa deletada com sucesso.');
    }
}
