@extends('template.main')
@section('container')


    @if($all->count() > 0)

        <div class="alert alert-info hidden" id="loading">
            <strong>Aguarde...</strong>
        </div>

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
                <tr id="{{ $data['id'] }}">
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
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                    data-toggle="dropdown">
                                Ações
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                                           href="{{ route('task.show', $data['id']) }}"
                                                           id="{{ $data['id'] }}">Ver tarefa</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1" href="{{ route('task.edit', $data['id']) }}"
                                                           id="{{ $data['id'] }}">Editar</a></li>
                                <li role="presentation"><a role="menuitem" tabindex="-1"
                                                           href="{{ route('task.destroy', $data['id']) }}"
                                                           id="{{ $data['id'] }}"
                                                           class="delete">Excluir</a></li>

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

@section('scripts')

    <script type="text/javascript">

        $(function () {
            $('a.delete').click(function (e) {
                e.preventDefault();

                if (confirm('Deseja realmente excluir a tarefa?') === false) {
                    return false;
                }

                var url = $(this).attr('href');
                var token = '{{ csrf_token() }}'

                $.ajax({
                    'url': url,
                    'data': {_token: token},
                    'method': 'delete',
                    beforeSend: function () {
                        $('#loading').toggleClass('hidden');
                    },
                    complete: function () {
                        $('#loading').toggleClass('hidden');
                    },
                    success: function (data) {
                        if (data.result === 'success') {
                            alert('Tarefa deletada com sucesso.');
                        } else {
                            alert('Registro não deletado.');
                        }

                        window.location.reload();
                    },
                    error: function (err) {
                        alert('Não foi possível deletar a tarefa: ' + err.toString());
                    }

                });

            });
        });

    </script>

@endsection