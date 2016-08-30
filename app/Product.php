<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function User()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function ProductCategory()
    {
        return $this->belongsTo('App\ProductCategory', 'category_id');
    }
}
