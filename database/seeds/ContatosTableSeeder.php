<?php

use Illuminate\Database\Seeder;
use App\contato;
class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         contato::create([
            'nome' => 'Tiago Ferreira',
            'email' => 'tiagoferreira1258@gmail.com',
             'telefone' => '555555555',
             'data_nascimento' => '2018/05/01',
        ]);
    }
}
