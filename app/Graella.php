<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Graella extends Model
{
    public function programes()
    {
        return $this->hasMany(Programa::class);
    }
}
