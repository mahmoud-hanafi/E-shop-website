<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
//    public function category(){
//	    return $this->belongsTo('App\Category','category_id','id')->withDefault([
//		    'name' => 'Guest Author',
//	    ]);
//    }
protected $fillable=['category_id','name','price','image','user_id'];

    public function category(){
	    return $this->belongsTo('App\Category','category_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function suppliers()
    {
        return $this->belongsToMany('App\Supplier','product_suppliers','prod_id','supp_id');
    }
}
