<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index() {
    	$products = Product::all();
    	$categories = Category::all();
    	return view('landing.index',compact(['products','categories']));
    }

    public function showSingle($id) {
    	$product = Product::find($id);
    	return view('landing.product_info',compact('product'));
    }

    public function updateCategory(Request $request){
      $data = Category::where('id', $request->id)

          ->update([
          	'title' => $request->title,
          	'description' => $request->description,
          ]);

       if ($data) {
       	 return back()->with('message','Updated');
       }

    }

    public function updateProduct(Request $request){
      $data = Product::where('id', $request->id)

          ->update([
          	'title' => $request->title,
          	'price' => $request->price,
          	'category_id' => $request->category_id,
          	'description' => $request->description,
          ]);

       if ($data) {
       	 return back()->with('message','Updated');
       }

    }
}
