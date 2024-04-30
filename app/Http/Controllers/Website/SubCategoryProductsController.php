<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryProductsController extends Controller
{
    public function index($id){
        $subCategory = SubCategory::with('products')->find($id);
        // return $subCategories;
        return view('website.pages.subCategoryProducts.index', compact('subCategory'));
    }
}
