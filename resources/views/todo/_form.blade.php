<div class="form-group">
    <label for="title">Title</label>
    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Título da tarefa']) !!}
</div>

<div class="form-group">
    <label for="description">Descrição</label>
    {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Descrição']) !!}
</div>

<div class="form-group">
    <label for="status">Status</label>
    {!! Form::select('status', ['' => 'Selecione', '1' => 'Aberto', '2' => 'Em andamento', '3' => 'Realizada', ], null, ['class' => 'form-control']) !!}
</div>