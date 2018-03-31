@extends('principal')
@section('conteudo')
    <h1>Detalhes do produto</h1>
    <table class="table table-bordered table-responsive">
        <tr><td>Nome</td><td>{{$p->nome}}</td></tr>
        <tr><td>Valor (R$)</td><td>{{$p->valor}}</td></tr>
        <tr><td>Descrição</td><td>{{$p->descricao}}</td></tr>
        <tr><td>Quantidade</td><td>{{$p->quantidade}}</td></tr>
    </table>
@stop