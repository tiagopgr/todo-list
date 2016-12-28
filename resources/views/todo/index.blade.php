@extends('template.main')
@section('container')
    

    @if($all->count() > 0)

        <table class="table table-hover table-bordered table-striped">
            <thead>
            <tr>
                <th>Título</th>
                <th>Status</th>
                <th>Ver tarefa</th>
                <th>Ação</th>
                <th>Editar</th>
                <th>Excluir</th>
            </tr>
            </thead>
            <tbody>
            @foreach($all as $data)
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
            </tbody>
        </table>


    @else
        <div class="alert alert-info">
            <strong>Nenhuma tarefa cadastrada</strong>
        </div>
    @endif
@endsection