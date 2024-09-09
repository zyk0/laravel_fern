<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::where('id', 5)->first();
		
		echo $products->title.' ('.$products->price.')';
		//$products = Product::all();
		//dump($products);
		/*
		foreach($products as $product){
			echo 'title: '.$product->title;
			echo '<br>';
		}
		*/
		
        return view('home.index');
    }
}
