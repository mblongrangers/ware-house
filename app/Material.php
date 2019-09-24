<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
	public function materialCategory()
	{
		return $this->belongsTo(MaterialCategory::class, 'materialcategory_id');
	}
}
