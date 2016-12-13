@extends('layout.principal')
@section('conteudo')
    @if(empty($estados))
        <div class="alert alert-danger">
            Você não tem nenhum estado cadastrado.
        </div>
    @else
        <h1>Lista de estados</h1>
        <table class="table table-striped table-bordered table-hover">
            @foreach ($estados as $e)
                <tr>
                    <td>{{$e->nome}}</td>
                    <td>{{$e->sigla}}</td>
                    <td>{{$e->historico}} </td>
                    <td>
                        <a href="/estado/detalhes/{{$e->id}}">
                            <span class="glyphicon glyphicon-plus"></span>
                        </a>
                    </td>
                    <td>
                        <a href="/estado/editar/{{$e->id}}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                    </td>
                </tr>
            @endforeach
            @endif
        </table>
        @if(old('nome'))
            <div class="alert alert-success">
                <strong>Sucesso!</strong> o estado, {{old('nome')}}, foi adicionado!
            </div>
        @endif
@stop

