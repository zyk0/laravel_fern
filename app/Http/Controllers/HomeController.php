<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
		
		$firstid = Product::first('id', 'asc')->first();		
		$lastid =  Product::latest('id', 'desc')->first();

		$randomproduct = rand($firstid->id, $lastid->id); //рандомный id продукта из таблицы
        $products = Product::where('id', $randomproduct)->first();
		
		$oneproduct = $products;
		
		return view('home.index',[
            'oneproduct' => $oneproduct,
			'firstid' => $firstid->id,
			'lastid' => $lastid->id,
        ]);
		
		//echo $products->title.' ('.$products->price.')';
		
		//$products = Product::all();
		//dump($products);
		/*
		foreach($products as $product){
			echo 'title: '.$product->title;
			echo '<br>';
		}
		*/
		
        //return view('home.index');
    }
}
