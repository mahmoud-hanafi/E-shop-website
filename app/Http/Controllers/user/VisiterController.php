<?php

namespace App\Http\Controllers\user;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;
class VisiterController extends Controller
{
    public function index(){
//			DB::table('products')->get();
        $products=Product::get();
        return view('fronts.visitproduct',compact('products'));
    }
}
