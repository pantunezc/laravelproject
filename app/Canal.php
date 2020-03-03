<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canal extends Model
{
    protected $fillable = [
        'nom'
    ];
    public $timestamps = false;

    public function programes()
    {
        return $this->hasMany(Programa::class);
    }
}
