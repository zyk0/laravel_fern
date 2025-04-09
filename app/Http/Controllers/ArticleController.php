<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
	/*
    public function index(){
        return view('article.index');
    }
	*/
	    public function index(){
		
		$firstid = Product::first('id', 'asc')->first();		
		$lastid =  Product::latest('id', 'desc')->first();

		$randomproduct = rand($firstid->id, $lastid->id); //рандомный id продукта из таблицы
        $products = Product::where('id', $randomproduct)->first();
		
		$oneproduct = $products;
		
		return view('article.index',[
            'oneproduct' => $oneproduct,
			'firstid' => $firstid->id,
			'lastid' => $lastid->id,
        ]);
		}
}
