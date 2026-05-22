<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'benefit',
        'image',
        'category',
        'tags',
        'badges'
    ];

    public function histories()
    {
        return $this->hasMany(History::class);
    }
}