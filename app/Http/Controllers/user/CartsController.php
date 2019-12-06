<?php

namespace App\Http\Controllers\user;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CartsController extends Controller
{
   public function __construct()
    {
        $this->middleware('is_user');
    }

    public function store(Product $product){

		$cart=new Cart();
	    $cart->user_id=1;
	    $cart->product_id=$product->id;
	    $cart->save();
	    return redirect()->back();
    }
}
