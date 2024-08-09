<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail(String $id){
        $product = Product::query()->findOrFail($id);

        $listProduct = Product::query()->get();


        return view('clients.products.detail', compact('product', 'listProduct')); 
    }

    public function getAll(){

        $categories = Category::all();

        $listProduct = Product::query()->latest('id')->paginate(12);

        return view('clients.products.shop', compact('categories', 'listProduct')); 
    }

    public function getProByCat(string $id){

        $categories = Category::all();

        $listProduct = Product::query()->where('category_id', $id)->paginate(12);
        
        return view('clients.products.shop', compact('categories', 'listProduct')); 
    }


}
