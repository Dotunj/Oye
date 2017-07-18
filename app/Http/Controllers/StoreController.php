<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class StoreController extends Controller
{
    public function shop()

    {
        $products = Product::all();

      // dd($products);
        
    	return view('store.index', compact('products'));
    }

    public function show($slug)

    {

      $product = Product::whereSlug($slug)->firstorFail();

      return view('store.product', compact('product'));


    }


}
