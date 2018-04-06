@extends('layout.principal')
@section('conteudo')
    <h1 style="text-align: center">Listagem de Produtos</h1>
    @if (empty($produtos))
        <div class="alert alert-danger">
            Você não tem nenhum produto cadastrado
        </div>
    @else
        <table class="table table-bordered table-responsive">
            @foreach ($produtos as $p)
                <tr>
                    <td class="{{$p->quantidade <=5 ? 'danger':'success'}}">{{$p->nome}}</td>
                    <td><a href="/produtos/mostra/{{$p->id}}">
                            Visualizar
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif
    <h4>
        <span class="label label-danger pull-right">
            Um ou menos itens no estoque
        </span>
    </h4>
@stop
