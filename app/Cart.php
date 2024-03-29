<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable=['product_id','user_id'];


    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
