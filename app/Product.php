<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
        'code',
        'name',
        'quantity',
        'price',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function packings()
    {
        return $this->hasMany(Packing::class);
    }

    public function sells()
    {
        return $this->hasMany(Sell::class);
    }
}
