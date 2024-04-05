<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subCats = SubCategory::where('status', 1)->get();
        $products = Product::with('subCategory')->get();
        // return $products;
        return view('admin.pages.products.index', compact('subCats', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:2',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'image' => 'nullable|mimes:jpg,jpag,png',
            'sub_category_id' => 'required',
            'quantity' => 'required|integer',
            'status' => 'required',
        ]);
        $product = Product::create($request->except('image'));
        if ($request->has('image')) {
            $product->addMediaFromRequest('image')->toMediaCollection('images');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $subCats = SubCategory::where('status', 1)->get();
        $product = Product::with('subCategory')->find($id);
        // return $product;
        return view('admin.pages.products.edit', compact('product', 'subCats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|min:2',
            'description' => 'required|min:10',
            'price' => 'required|numeric',
            'image' => 'nullable|mimes:jpg,jpag,png',
            'sub_category_id' => 'required',
            'quantity' => 'required|integer',
            'status' => 'required',
        ]);

        $product = Product::find($id);
        if ($request->has('image')) {
            $old = $product->getFirstMedia('images');
            if ($old) {
                $old->delete();
            }
            $product->addMediaFromRequest('image')->toMediaCollection('images');
        }
        $product->update($request->except('_token', '_method', 'image'));
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $old = $product->getFirstMedia('images');
        if ($old) {
            $old->delete();
        }
        $product->delete();
        return redirect()->back();
    }
}
