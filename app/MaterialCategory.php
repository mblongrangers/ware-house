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

	public function status($required)
	{
		return $this->materials->sum('quantity') >= $required ? 'Tersedia' : 'Tidak Tersedia';	
	}
}
