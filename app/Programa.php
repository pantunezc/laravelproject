<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Programa extends Model
{
    public function canal()
    {
        return $this->belongsTo(Canal::class);
    }

    public function graellas()
    {
        return $this->belongsToMany(Graella::class);
    }
}
