<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\ProductImage;

class Product extends Model
{
    //use HasFactory;
	public function images(){
		return $this->hasMany('App\Models\ProductImage');
	}
}
