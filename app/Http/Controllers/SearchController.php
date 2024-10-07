<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){ 
		$s = $request->s;	
		//dd($s);
		$searchlist = Product::where('description', 'LIKE', "%{$s}%")->get();
		//dd($searchlist);
		return view('search.index', compact('searchlist'));
	}
	
	//public function search(){ return view('search.index'); }
    
}
