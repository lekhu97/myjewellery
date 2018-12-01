<?php

namespace App\Http\Controllers;
use App\Product;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id) {
    	$product = Product::find($id);
    	return view('order.index',compact('product'));
    }

    public function success() {
    	return view('order.success');
    }

    public function store(Request $request) {

     	$order = Order::create([
    		'user_name'=>$request->user_name,
    		'product_name'=>$request->product_name,
            'price'=>$request->price,
            'qty'=>$request->qty,
            'status'=>'confirmed',
    	]);

    	if ($order) {
    		return redirect('success')->with('message','Product Added Successfully');
    	}
    	
    }
}
