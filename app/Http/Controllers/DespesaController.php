<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Despesa;

class DespesaController extends Controller
{
    public function despesa(){

        $despesa = new Despesa();
        $despesa->titulo_despesa = $request->input('titulo_despesa');
        $despesa->quantidade = $request->input('quantidade');
        $despesa->valor_uni = $request->input('valor_uni');
        $despesa->valor_total = $request->input('valor_total');
        $despesa->evento_origem = $request->input('evento_origem');

        $despesa->save();


        return view('site.despesa');
    }
}
