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
}
