<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialCategory extends Model
{
	protected $table = 'materialcategories';

	public function materials()
	{
		return $this->hasMany(Material::class, 'materialcategory_id');
	}
}
