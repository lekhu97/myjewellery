<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
		'title', 'description'
	];
    public function category() {
    	return $this->belongsToMany("App\Product");
    }
}
