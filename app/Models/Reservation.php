<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Reservation extends Model
{
    protected $fillable = [
        '_id','offer_id', 'client_id', 'start_date', 'end_date', 'total_price', 'status'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->_id = (string) Str::uuid();
        });
    }

    public function client()
    {
        return $this->belongsTo(Clients::class);
    }

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
