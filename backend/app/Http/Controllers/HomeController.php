<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /**
         * 
         * Remember to select product categories not products
         * $categories = Category::inRandomOrder()->take(8)->get();
         */
        $products = Product::inRandomOrder()->take(8)->get();

        return view('pages.index')->with('products', $products);
    }

}
