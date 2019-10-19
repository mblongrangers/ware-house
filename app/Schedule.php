<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{

	protected $fillable = [
		'user_id', 'created_at', 'updated_at', 'formulation_id', 'batch'
	];

	public function user()
    {
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function materialCategories()
    {
    	return $this->belongsToMany(MaterialCategory::class)->withPivot('sum');
    }

    public function formulation()
    {
        return $this->belongsTo(Formulation::class);
    }

}
