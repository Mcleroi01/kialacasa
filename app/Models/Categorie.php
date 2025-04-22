<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['name', 'slug'];

    public function establishments()
    {
        return $this->belongsToMany(Establishment::class);
    }
}