<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
		
		//$products = Product::all(); //dump($products);
		/*
		foreach($products as $product){
			echo 'title: '.$product->title;
			echo '<br>';
			}
		*/	
		$products = Product::orderBy('price', 'desc')->take(8)->get();
		
		//$paginate = 2;
		//$products = Product::orderBy('id', 'asc')->paginate($paginate);
		
		//$products = Product::where('category_id',$cat->id)->paginate($paginate);
		
        return view('product.index', [
			'products' => $products
		]);
	}
	
	//public function showCategory(){}
	
	public function search(Request $request){ 
		$s = $request->s;	
		//dd($s);
		//$products = Product::where('description', 'LIKE', "%{$s}%")->get();
		$products = Product::where('description', 'LIKE', "%{$s}%", 'AND', '!=', '')->get();
		//dd($products);
		return view('product.index', [
		    'products' => $products
		]);
	}
		
}