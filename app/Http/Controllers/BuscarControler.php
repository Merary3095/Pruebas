<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscarControler extends Controller
{
    public function listar_por($categoria_id){
        //procesamos la cadena buscar
        return view('buscar.listar', ['categoria_id' => $categoria_id] );
    }
}
