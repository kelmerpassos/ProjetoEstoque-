@extends('layout.principal')
@section('conteudo')
    <h1>Novo Produto</h1>
    <form action="/produtos/adiciona" method="get">
        {{--<input nome="_token" type="hidden" value="{{{csrf_token()}}}"/>--}}
        <div class="form-group">
            <label for="nome">Nome</label><input name="nome" class="form-control" id="nome"/>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label><input name="descricao" class="form-control" id="descricao">
        </div>
        <div class="form-group">
            <label for="valor">Valor</label><input type="number" name="valor" class="form-control" id="valor">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label><input type="number" name="quantidade" class="form-control" id="quantidade">
        </div>
        <button type="submit" class="btn btn-primary btn-block">Salvar</button>
    </form>

@stop
