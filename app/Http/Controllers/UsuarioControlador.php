<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioControlador extends Controller
{
    public function __construct(){
        //$this->middleware('primeiro');
        
    }

    public function index(){

        return '<h3>Lista de Usuários</h3>'.
            '<ul>'.
                '<li>Renan</li>'.
                '<li>Kauan</li>'.
                '<li>Rafael</li>'.
                '<li>Eliane</li>'.
                '<li>Renato</li>'.
            '</ul>';
    }
}
