<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;
use Carbon\Carbon;

class Schedule extends Model
{
    use CrudTrait;

    protected $table = 'schedules';
    protected $fillable = [];

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('j F Y');
    }

    public function formulation()
    {
        return $this->belongsTo(\App\Formulation::class);
    }

    public function materialCategories()
    {
        return $this->belongsToMany(MaterialCategory::class)->withPivot('sum');
    }
}
