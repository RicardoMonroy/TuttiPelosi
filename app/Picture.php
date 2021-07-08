<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
        'picture', 'pet_id'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }
}
