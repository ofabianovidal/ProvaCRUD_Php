<!-- resources/views/tarefas/create.blade.php -->

@extends('layout')

@section('content')
    <div class="container mt-5">
        <h2>Criar Nova Tarefa</h2>

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

        <form action="{{ route('tarefas.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="Titulo">Título:</label>
                <input type="text" name="Titulo" class="form-control" value="{{ old('Titulo') }}" required>
            </div>

            <div class="form-group">
                <label for="Descricao">Descrição:</label>
                <textarea name="Descricao" class="form-control" rows="4" required>{{ old('Descricao') }}</textarea>
            </div>

            <div class="form-group">
                <label for="Status">Status:</label>
                <select name="Status" class="form-control">
                    <option value="1">Criada</option>
                    <option value="2">Em Andamento</option>
                    <option value="3">Finalizada</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Criar Tarefa</button>
        </form>
    </div>
@endsection
