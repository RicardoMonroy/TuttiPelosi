<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = [
        'number',
        'name',
        'owner_id'
    ];

    protected $hidden = ['created_at', 'updated_at'];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
