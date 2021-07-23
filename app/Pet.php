<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $fillable = [
        'tag',
        'pin',
        'name',
        'description',
        'dog_breed',
        'age',
        'sex',
        'color',
        'special_cares',
        'personality',
        'veterinary',
        'owner_id'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }

    public function vaccines()
    {
        return $this->hasMany(Vaccine::class);
    }
}
