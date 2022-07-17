<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    protected $table = "usuarios";
    protected $fillable = ["id","name","email","dni","phone","rol","status","password"] ;
    public $timestamp = false;

    function obtenerUsuarios(){
        return Usuario::all();
        }
        public function obtenerUsuarioporId($id)
        {
        return Usuario::find($id);
        }
    use HasFactory;
}
