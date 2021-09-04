<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class personaController extends Controller
{
    /**IMPLEMENTAR LOGICA DE NEGOCIO**/

    function mostrarUsuario($nombre_usuario = null){
        if ($nombre_usuario==null) {
            return 'Debe ingresar un nombre de usuario';
        }
        return 'Nombre usuario = '.$nombre_usuario;
    }
}
