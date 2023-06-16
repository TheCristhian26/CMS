<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "producto";

    protected $fillable = [
        "nombre_del_producto",
    ];

    public function user() {
        return $this->belongsTo(User::class,'user_id');
    }

    public function tareas() {
        return $this->hasMany(Tarea::class,'project_id');
    }
}