<?php

namespace App\Http\Controllers\user;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

    //public function __construct()
    //{
      //  $this->middleware('is_user');
    //}

		public function index(){
//			DB::table('products')->get();
			$products=Product::get();
//			$first=$products->first();
//			$last=$products->last();
//			$productnumber1=Product::where('id','=',10)->get();
//			dd($productnumber1,$products,$first,$last);
			$carts=Cart::where('user_id',1)->get();
//			dd($carts);
			return view('fronts.product',compact('products','carts'));
		}
}
