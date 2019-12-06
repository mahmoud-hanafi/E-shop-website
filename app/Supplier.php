<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    public function products()
    {
        return $this->belongsToMany('App\Product','product_suppliers','supp_id','prod_id');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
