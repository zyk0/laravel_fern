<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
		/*
		$firstid = Product::first('id', 'asc')->first();		
		$lastid =  Product::latest('id', 'desc')->first();

		$randomproduct = rand($firstid->id, $lastid->id); //рандомный id продукта из таблицы
        $products = Product::where('id', $randomproduct)->first();
		
		$oneproduct = $products;
		*/
		return view('welcome.index');
		
		
        //return view('home.index');
    }
}
