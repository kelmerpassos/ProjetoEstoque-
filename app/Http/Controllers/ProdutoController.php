<?php

namespace estoque\Http\Controllers;

//use Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function lista(){

        $produtos = DB::select('select * from produtos');
        return view('listagem')->with('produtos',$produtos);
    }

    public function detalhes($id){
//        $id = Request::route('id');
        $produtos = DB::select('select * from produtos where id=?',[$id]);
        if (empty($produtos)){
            return "Este produto não existe";
        }else{
            return view('detalhes')->with('p',$produtos[0]);
        }

    }
}
