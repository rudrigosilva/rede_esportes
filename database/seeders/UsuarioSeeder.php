<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SiteUsuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $usuario = new SiteUsuario();
        $usuario->nome = 'Teste';
        $usuario->telefone  = '32999999';
        $usuario->email = 'teste@teste';
        $usuario->senha = 123;
        $usuario->save();
    }
}
