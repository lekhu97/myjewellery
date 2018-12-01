<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
class AdminController extends Controller
{
	public function __construct() {
		$this->middleware(['auth','admin']);
	}
    public function index() {
    	$orders = Order::all();
    	return view('admin.dashboard',compact('orders'));
    }
}
