@extends('template.main')

@section('container')

    <div class="row">
        <div class="col-md-4 col-lg-offset-4">
            <h2>Criar nova tarefa.</h2>
            {!! Form::open(['route' => ['task.store'], 'method' => 'post']) !!}
            @include('todo._form')
            {!! Form::submit('Criar', ['class' => 'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
    </div>


@endsection