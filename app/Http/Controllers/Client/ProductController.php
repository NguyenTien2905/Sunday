<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail(String $id){
        $product = Product::query()->findOrFail($id);

        $listProduct = Product::query()->get();


        return view('clients.products.detail', compact('product', 'listProduct')); 
    }
}
