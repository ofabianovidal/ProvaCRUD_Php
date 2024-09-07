<!-- resources/views/tarefas/edit.blade.php -->

@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>Editar Tarefa</h2>

        <!-- Exibe erros de validação -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('tarefas.update', $tarefa->i_a) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="Titulo">Título:</label>
                <input type="text" name="Titulo" class="form-control" value="{{ $tarefa->Titulo }}" required>
            </div>

            <div class="form-group">
                <label for="Descricao">Descrição:</label>
                <textarea name="Descricao" class="form-control" rows="4" required>{{ $tarefa->Descricao }}</textarea>
            </div>

            <div class="form-group">
                <label for="Status">Status:</label>
                <select name="Status" class="form-control">
                    <option value="1" {{ $tarefa->Status == 1 ? 'selected' : '' }}>Criada</option>
                    <option value="2" {{ $tarefa->Status == 2 ? 'selected' : '' }}>Em Andamento</option>
                    <option value="3" {{ $tarefa->Status == 3 ? 'selected' : '' }}>Finalizada</option>
                </select>
            </div>

            <button type="submit" class="btn btn-success mt-3">Atualizar Tarefa</button>
        </form>
    </div>
@endsection
