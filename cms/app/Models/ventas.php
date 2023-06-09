<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "ventas";

    protected $fillable = [
        "name",
        "cedula",
        "tipo_persona",
        "imagen",
        "nombre_del_producto",
        "numero_de_ventas",
        "precio",
        "fecha"
    ];

    public function facturass(){
        return $this->hasMany(Factura::class,'Factura_id');
    }
    
}