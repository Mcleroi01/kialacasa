<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Establishment extends Model
{
     protected $fillable = [
        'user_id', 'name', 'description', 'phone', 'email', 'address', 'latitude', 'longitude'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Categorie::class);
    }

    public function offers()
    {
        return $this->hasMany(Offer::class);
    }
}