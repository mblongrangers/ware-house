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
		return ($this->materials->sum('quantity') - $this->schedules->where('process', 0)->sum('pivot.sum')) >= $required ? 'Tersedia' : 'Tidak Tersedia';	
	}

	public function isAvailable($required)
	{
		return $this->status($required) == 'Tersedia';	
	}

	public function schedule()
    {
        return $this->belongsToMany(Schedule::class);
    }

    public function schedules()
    {
    	return $this->belongsToMany(Schedule::class)->withPivot('sum');
    }
}
