<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class alumno extends Model
{
    protected $guarded = [];
    public function alumno(){
        return $this->belongsToMany(cursos::class);
    }
}
