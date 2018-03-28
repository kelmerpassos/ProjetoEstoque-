<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use estoque\Produto;

class ProdutoController extends Controller
{
    public function lista(){

        $produtos = DB::select('select * from produtos');
        return view('listagem')->with('produtos',$produtos);
    }

    public function detalhes(){
        $produtos = DB::select('select * from produtos where id=1');
        return view('detalhes')->with('p',$produtos);
    }
}
