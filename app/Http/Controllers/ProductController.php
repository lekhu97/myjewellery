<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products  = Product::all();
        return view('admin.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
         return view('admin.products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'description'=>'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       
       if ($data) {
            $image = $request->file('photo');

            $img_name = time().'.'.$image->getClientOriginalExtension();

            $destinationPath = public_path('/images/products');

            $image->move($destinationPath, $img_name);

            $final_name =  'images/products/'.''.$img_name;
            Product::create([
                'title'=>$request->title,
                'price'=>$request->price,
                'category_id'=>$request->category_id,
                'description'=>$request->description,
                'photo'=>$final_name,
            ]);
          
        return back()->with('message','Product Added Successfully');
       }else{
        
        return back()->with('message','Failed to Upload');
       }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product  = Product::find($id);
        $categories  = Category::all();
         return view('admin.products.edit',compact(['product','categories']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
         if ($product->delete()) {
            return back()->with('message','Record Deleted');
        }else{
            return back()->with('message','Error Deleted');
        }
    }

    
}
