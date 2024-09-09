<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('article.index');
    }
}
