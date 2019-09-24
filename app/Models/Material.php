<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;

class Material extends Model
{
    use CrudTrait;

    protected $table = 'materials';
    protected $fillable = [
        'code',
        'name',
        'quantity',
        'materialcategory_id'
    ];

    public function materialcategory()
    {
        return $this->belongsTo(MaterialCategory::class);
    }
}
