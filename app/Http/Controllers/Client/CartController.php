<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function listCart()
    {
        $cart = session()->get('cart', []);
        // session()->put('cart', $cart);

        $total  = 0;
        $subTotal = 0;
        foreach ($cart as $item) {
            $subTotal += $item['price']  * $item['quantity'];
        }

        $shipping = 30000;

        $total = $subTotal + $shipping;

        return view('clients.cart', compact('cart', 'total', 'subTotal', 'shipping'));
    }


    public function addCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        $product = Product::query()->findOrFail($productId);

        //Khoi tao 1 array thông tin cart trên session
        $cart = session()->get('cart', []);
        if (isset($cart[$productId])) {
            // Sản phẩm đã tồn tạo trong giỏ hàng
            $cart[$productId]['quantity'] += $quantity;
        } else {    
            // Sản phẩm chưa có trong giỏ hàng
            $cart[$productId] = [
                'name' => $product->name,
                'quantity' => $quantity,
                'price' => isset($product->price_sale) ? $product->price_sale : $product->price_regular,
                'img_thumnail' => $product->img_thumnail,
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back();
    }

    public function updateCart()
    {
        
    }
}
