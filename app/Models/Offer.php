<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable = [
        'establishment_id', 'title', 'description', 'price_per_night', 'max_guests'
    ];

    public function establishment()
    {
        return $this->belongsTo(Establishment::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}