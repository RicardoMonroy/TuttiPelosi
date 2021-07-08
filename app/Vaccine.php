<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    protected $fillable = [
        'vaccine', 'date', 'pet_id'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
