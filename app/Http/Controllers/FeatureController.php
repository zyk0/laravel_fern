<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

//Illuminate\Contracts\Container\BindingResolutionException
//Target class [FeatureController] does not exist.

class FeatureController extends Controller
{	

		public function index(){
		//$products = Product::all(); //dump($products);
		
		//foreach($products as $product){
		//	echo 'title: '.$product->title;
		//	echo '<br>';
		//	}
			
		$products = Product::orderBy('price', 'desc')->take(4)->get();
		
        return view('feature.index', [
			'products' => $products
		]);
		}
}


/*
{
    public function index(){
		return view('feature.index');
	}
}
*/