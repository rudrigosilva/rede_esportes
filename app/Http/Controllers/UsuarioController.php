<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteUsuario;

class UsuarioController extends Controller
{
    public function usuario(Request $request){

        $usuario = new SiteUsuario();
        $usuario->nome = $request->input('nome');
        $usuario->telefone = $request->input('telefone');
        $usuario->email = $request->input('email');
        $usuario->senha = $request->input('senha');

        $usuario->save();

        return view('site.usuario');
    }
}
