<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $table = "tipo_persona";

    protected $fillable = [
        "numero"
        
    ];

    

    public function personas(){
        return $this->hasMany(Persona::class,'tipo_persona_id');
    }
}
