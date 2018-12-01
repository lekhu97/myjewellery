<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Order extends Model
{
    protected $fillable = [
    	'user_name',
    	'product_name',
    	'price',
    	'status',
    	'qty'
    ];

}
