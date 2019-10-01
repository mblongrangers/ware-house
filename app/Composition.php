<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Composition extends Model
{
	protected $fillable = [
		'materialcategory_id', 'formulation_id', 'quantity'
	];

    public function formulation()
    {
        return $this->belongsTo(Formulation::class);
    }

    public function materialCategory()
    {
    	return $this->belongsTo(MaterialCategory::class, 'materialcategory_id');
    }
}
