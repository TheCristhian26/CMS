<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "factura";

    protected $fillable = [
        "name",
        "cedula",
        "tipo_persona",
        "cantidad_de_fruto",
        "nombre_del_producto",
        "numero_de_ventas"
    ];

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function tareas() {
        return $this->hasMany(Tarea::class,'project_id');
    }
}