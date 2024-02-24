<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function create(){
        return view ('formulario');
    }
    // 4 rutas create y 4 store
    public function store(Request $request){
        return $request->num1;
    }

}
