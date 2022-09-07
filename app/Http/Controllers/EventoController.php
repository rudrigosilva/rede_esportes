<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function evento(){

        $evento = new Evento();
        $evento->titulo = $request->input('titulo');
        $evento->codigo_projeto = $request->input('codigo_projeto');
        $evento->datainicio = $request->input('data-inicio');
        $evento->valor = $request->input('valor');
        $evento->usuario_dono = $request->input('usuario_dono');

        $evento->save();

        return view('site.evento');
    }
}
