<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = "usuarios";
    protected $primaryKey = "Id_usuarios"; 
    protected $fillable = ['Id_usuario','Usuario', 'Password','Email', 'Rol','created_at','updated_at'];
}
