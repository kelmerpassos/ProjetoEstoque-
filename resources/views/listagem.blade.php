@extends('principal')
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
                    <td>{{$p->nome}}</td>
                    <td> <a href="/produtos/mostra/{{$p->id}}">
                            Visualizar
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    @endif

@stop
