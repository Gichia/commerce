<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    // All Products
    public function index() {

        if(request()->category) {
            $products = Product::with('categories')->whereHas('categories', function($query) {
                $query->where('slug', request()->category);
            })->get();
            $categories = Category::all();
            $categoryName = $categories->where('slug', request()->category)->first()->name;
        } else {
            $products = Product::inRandomOrder()->take(9)->get();
            $categories = Category::all();
            $categoryName = 'Featured Items';
        }

        $data = array(
           'title' => $categoryName,
           'products' => $products,
           'categories' => $categories
        );

        return view('shop.index')->with($data);
    }

    // Single Product
    /**
     * Return a single produc by slug
     * 
     */
    public function show($slug) {
        $product = Product::where('slug', $slug)->firstOrFail();

        return view('shop.show')->with('product', $product);
    }
}
