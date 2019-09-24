<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formulation extends Model
{
	protected $fillable = [
		'name'
	];

    public function compositions()
    {
        return $this->hasMany(Composition::class);
    }
}
