<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class cursos extends Model
{
    protected $guarded = [];

    public function cursos(){
        return $this->belongsToMany(alumno::class);

        {

        }
    }
}


