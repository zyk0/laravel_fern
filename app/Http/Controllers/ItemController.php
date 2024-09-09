<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Item;
use Illuminate\Http\Request;


/*

class ProductController extends Controller
{
    public function show($cat,$product_id){
        $item = Product::where('id',$product_id)->first();

        return view('product.show',[
            'item' => $item
        ]);
    }
*/

class ItemController extends Controller
{
	//public function index(){return view('product.index');}
		
    public function show($cat, $product_id){
        $item = Product::where('id', $product_id)->first();

        return view('item.show',[
            'item' => $item
        ]);
    }
}

