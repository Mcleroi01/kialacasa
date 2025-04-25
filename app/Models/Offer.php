<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Offer extends Model
{
    protected $fillable = [
        '_id','establishment_id', 'title', 'description', 'price_per_night', 'max_guests'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->_id = (string) Str::uuid();
        });
    }

    public function establishment()
    {
        return $this->belongsTo(Establishment::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}