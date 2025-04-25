<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Establishment extends Model
{
     protected $fillable = [
        '_id','user_id', 'name', 'description', 'phone', 'email', 'address', 'latitude', 'longitude'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->_id = (string) Str::uuid();
        });
    }

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