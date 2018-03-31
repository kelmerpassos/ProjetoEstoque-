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
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values(?,?,?,?)',array("Fogão",12,400.00,"Painel automático e forno eletrico"));
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values(?,?,?,?)',array("Geladeira",5,2000,"Duas portas com economia de energia"));
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values(?,?,?,?)',array("Microondas",20,300,"Painel totalmente elétrico"));
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values(?,?,?,?)',array("Armario",5,600,"Totalmente de jacarandá e marfim"));
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values(?,?,?,?)',array("Maquina de Lavar",4,1500,"Aguenta até 22kg"));

    }
}
