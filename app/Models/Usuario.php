<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "alumnos";
    protected $fillable = ["id","nombre","correo","cedula","telefono","rol","estatus"] ;

    public function obtenerUsuarios(){
        return Usuario::all();
        }
        public function obtenerUsuarioporId($id)
        {
        return Usuario::find($id);
        }
    use HasFactory;

}


