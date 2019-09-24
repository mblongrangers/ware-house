<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Materialcategory extends Model
{
    use CrudTrait;

    protected $table = 'materialcategories';
    protected $fillable = [
        'name'
    ];

    public function materials()
    {
    	return $this->hasMany(Material::class, 'materialcategory_id');
    }

    public function getMaterialsQuantity()
    {
    	return $this->materials->sum('quantity');
    }
}
