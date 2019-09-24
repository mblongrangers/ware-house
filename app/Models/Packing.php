<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Carbon\Carbon;

class Packing extends Model
{
    use CrudTrait;
    protected $table = 'packings';
    protected $fillable = [
        'shift',
        'machine',
        'jenis',
        'start',
        'finish',
        'carton',
        'counter',
        'iner',
        'bs',
        'person',
        'description',
        'product_id',
        'created_at'

    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('j F Y');
    }
}
