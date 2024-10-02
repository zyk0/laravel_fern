<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Item;
use Illuminate\Http\Request;

use Carbon\Carbon;

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
		
		Carbon::setLocale('ru_RU'); // AppServiceProvider boot()
		$day = Carbon::parse($item->created_at);
		$now = Carbon::today(); // сегодня
		$future = Carbon::now()->addDays(7); // сегодня +7дней
		
        return view('item.show',[
            'item' => $item,
			'day'=>$day,
			'now'=>$now,
			'future'=>$future,
        ]);
    }
}

