<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graella extends Model
{
    protected $fillable = [
        'dia','hora'
    ];
    public $timestamps = false;

    public function programas()
    {
        return $this->belongsToMany(Programa::class);
    }

    public function scopeDia($query,$dia){
        if ($dia){
            return $query->where('dia','like',"%$dia");
        }
    }

    public function scopeHora($query,$hora){
        if ($hora){
            return $query->where('hora','like',"$hora%");
        }
    }
}
