<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = [
        'address', 'city', 'state', 'user_id'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }

    public function phones()
    {
        return $this->hasMany(Phone::class);
    }
}
