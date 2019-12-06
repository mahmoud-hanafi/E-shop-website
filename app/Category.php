<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $fillable=['name','user_id'];
	public function products(){

	    return $this->hasMany('App\Product','category_id','id');
	}
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
