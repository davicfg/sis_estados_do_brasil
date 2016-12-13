@extends('layout.principal')
@section('conteudo')
    <h1>Novo produto</h1>
    <form action="/estado/adiciona" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
        {{ csrf_field() }}
        <div class="form-group">
            <label>Nome</label>
            <input name="nome" class="form-control">
        </div>
        <div class="form-group">
            <label>uf</label>
            <input name="uf" class="form-control">
        </div>
        <div class="form-group">
            <label>Historico</label>
            <input name="historico" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Enviar</button>
    </form>
@stop