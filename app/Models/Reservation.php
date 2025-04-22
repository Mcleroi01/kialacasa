<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'offer_id', 'client_id', 'start_date', 'end_date', 'total_price', 'status'
    ];

    public function client()
    {
        return $this->belongsTo(Clients::class);
    }

    public function offer()
    {
        return $this->belongsTo(Offer::class);
    }
}
