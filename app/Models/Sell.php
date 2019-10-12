<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Sell extends Model
{
    use CrudTrait;
    protected $table = 'sells';
    protected $fillable = [
        'name',
        'product_id'

    ];
    
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
