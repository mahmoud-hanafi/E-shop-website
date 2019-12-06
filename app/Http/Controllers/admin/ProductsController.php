<?php

namespace App\Http\Controllers\admin;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    //public function __construct()
    //{
       // $this->middleware('is_admin');
    //}

    public function index(){
	    $products=Product::get();
//	    dd($products);
//	    $i=0;
//	    $carts=0;
	    return view('admin.products.index',compact('products'));
    }
	public function create()
	{
		$categories=Category::all();
		return view('admin.products.create',compact('categories'));

	}//end of create

	public function store(Request $request)
	{
//		dd($request->all());

		$file = $request->file('image');

		//Display File Name
		echo 'File Name: '.$file->getClientOriginalName();
//		echo '<br>';
//		//Display File Extension
//		echo 'File Extension: '.$file->getClientOriginalExtension();
//		echo '<br>';
//		//Display File Real Path
//		echo 'File Real Path: '.$file->getRealPath();
//		echo '<br>';
//		//Display File Size
//		echo 'File Size: '.$file->getSize();
//		echo '<br>';
//		//Display File Mime Type
//		echo 'File Mime Type: '.$file->getMimeType();

		//Move Uploaded File
		$destinationPath = 'images';
		$file->move($destinationPath,$file->getClientOriginalName());



		$product=new Product();
		$product->name=$request->name;
		$product->price=$request->price;
		$product->category_id=$request->category_id;
		$product->image=$file->getClientOriginalName();
        $product->user_id=1;
		$product->save();

		return redirect()->route('admin.product.index');
	}//end of store

	public function edit(Product $product)
	{
		$categories=Category::all();
//		dd($product);
		return view('admin.products.edit', compact('categories','product'));

	}//end of edit

	public function update(Request $request, Product $product)
	{
		$file = $request->file('image');

		//Display File Name
		$destinationPath = 'images';
		$file->move($destinationPath,$file->getClientOriginalName());

		$product->name=$request->name;
		$product->price=$request->price;
		$product->category_id=$request->category_id;
		$product->image=$file->getClientOriginalName();
        $product->user_id=1;
		$product->save();

		return redirect()->route('admin.product.index');

	}//end of update

	public function destroy(Product $product)
	{
		$product->delete();
		return redirect()->route('admin.product.index');

	}//end of destroy
	public function show(Product $product)
	{
		return view('admin.products.show', compact('product'));

	}
}
