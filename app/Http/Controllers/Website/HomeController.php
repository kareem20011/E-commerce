<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $latestProducts = Product::with('subCategory')->latest()->take(10)->get();
        $subCats =SubCategory::with('products')->latest()->take(5)->get();
        $mainCats = MainCategory::with('SubCategory')->get();
        // return $mainCats;
        return view('website.pages.home', compact('latestProducts', 'subCats', 'mainCats'));
    }
}
