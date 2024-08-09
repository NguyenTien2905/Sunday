<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::query()->latest('id')->get();

        return view('clients.home', compact('products'));
    }


    public function introduce()
    {
        return view('clients.introduce');
    }

    public function contact()
    {
        return view('clients.contact');
    }
}
