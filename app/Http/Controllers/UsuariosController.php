<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;

class UsuariosController extends Controller
{
    public function Createuser()
    {

    }
    Public function GetAlluser()
    {
     $usuarios = Usuarios::all();
     return $usuarios->toJson();
    }
    
}
