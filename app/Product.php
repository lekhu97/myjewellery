<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = [
		'title','price','description','photo','category_id'
	];
    public function category() {
    	return $this->belongsToMany("App\Category");
    }
}
