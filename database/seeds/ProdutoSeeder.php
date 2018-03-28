<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values(?,?,?,?)',array("fogão",12,400.00,"Painel automático e forno eletrico"));
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values(?,?,?,?)',array("geladeira",5,2000,"Duas portas com economia de energia"));
    }
}
