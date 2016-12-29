@extends('template.main')
@section('container')

    <h1 class="text-info">Tarefa: {{ $task['title'] }}</h1>
    <span class="text-muted">Publicação: {{ $task['created_at'] }}</span>

    <h4 class="text-info">Descrição:</h4>
    <p class="text-warning">{{ $task['description'] }}</p>


    <a href="{{ route('task.index') }}" class="btn btn-primary">Voltar</a>
@endsection