@extends('template.main')

@section('container')
    <div class="row">
        <div class="col-md-4 col-lg-offset-4">
            <h2>Editar tarefa {{ $task['title'] }}.</h2>
            {!! Form::model($task, ['route' => ['task.update', $task['id']], 'method' => 'PATCH']) !!}
            @include('todo._form')
            {!! Form::submit('Editar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection