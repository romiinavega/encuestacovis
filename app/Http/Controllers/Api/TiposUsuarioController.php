<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//use App\Models\TipoUsuario;
use App\TipoUsuario;

class TiposUsuarioController extends Controller
{
    public function index() {
        $tiposUsuario = 
            TipoUsuario::select('id','descripcion')->
                get();
        return $tiposUsuario;
    }
}
