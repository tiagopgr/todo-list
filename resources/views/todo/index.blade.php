@extends('template.main')
@section('container')


    @if($all->count() > 0)

        <table class="table table-hover table-bordered table-striped">
            <thead>
            <tr>
                <th>Título</th>
                <th class="text-center">Status</th>
                <th class="text-center">Data/Hora</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach($all as $data)
                <tr>
                    <td>{!! $data['title'] !!}</td>
                    <td class="text-center">
                        @if($data['status'] == 1)
                            <span class="label label-info">Em aberto</span>
                        @elseif($data['status'] == 2)
                            <span class="label label-warning">Em andamento</span>
                        @elseif($data['status'] == 3)
                            <span class="label label-success">Realizada</span>
                        @endif
                    </td>
                    <td class="text-center">{{ $data['created_at'] }}</td>
                    <td>

                        <div class="dropdown">
                          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                            Ações
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="{{ $data['id'] }}">Ver tarefa</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="{{ $data['id'] }}">Editar</a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="{{ $data['id'] }}">Excluir</a></li>

                          </ul>
                        </div>

                    </td>
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