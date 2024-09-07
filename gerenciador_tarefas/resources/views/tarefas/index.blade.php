@extends('layout')

@section('content')
<h2>Tarefas</h2>

<a href="{{ route('tarefas.create') }}" class="btn btn-primary">Criar Tarefa</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tarefas as $tarefa)
        <tr>
            <td>{{ $tarefa->i_a }}</td>
            <td>{{ $tarefa->Titulo }}</td>
            <td>{{ $tarefa->Descricao }}</td>
            <td>{{ $tarefa->Status }}</td>
            <td>
                <a href="{{ route('tarefas.edit', $tarefa->i_a) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('tarefas.destroy', $tarefa->i_a) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
