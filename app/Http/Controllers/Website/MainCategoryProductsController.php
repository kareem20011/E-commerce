<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\MainCategory;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class MainCategoryProductsController extends Controller
{
    public function index($cat_id){
        $mainCategory = MainCategory::find($cat_id);
        $subCategories = SubCategory::with('products')->where('main_category_id', $cat_id)->get();
        // return $mainCategory;
        // return $subCategories;
        return view('website.pages.mainCategoryProducts.index', compact('mainCategory', 'subCategories'));
    }
}
