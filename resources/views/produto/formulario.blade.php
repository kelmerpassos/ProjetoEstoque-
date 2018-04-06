@extends('layout.principal')
@section('conteudo')
    <h1>Novo Produto</h1>
    <form>
        <div class="form-group">
            <label for="nome">Nome</label><input class="form-control" id="nome"/>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label><input class="form-control" id="descricao">
        </div>
        <div class="form-group">
            <label for="valor">Valor</label><input class="form-control" id="valor">
        </div>
        <div class="form-group">
            <label for="quantidade">Quantidade</label><input class="form-control" id="quantidade">
        </div>
        <button type="number" class="btn btn-primary btn-block">Salvar</button>
    </form>

@stop
