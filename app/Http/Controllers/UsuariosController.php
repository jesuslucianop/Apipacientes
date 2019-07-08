<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuarios;

class UsuariosController extends Controller
{
    public function Createuser(Request $request)
    {
        $data =  $request->all();
        $usuarios = Usuarios::create($data);
    }
    Public function GetAlluser()
    {
     $usuarios = Usuarios::all();
     return $usuarios->toJson();
    }
    
}
