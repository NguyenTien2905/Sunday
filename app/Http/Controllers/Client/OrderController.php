<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Mail\OrderConfirm;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $carts = session()->get('cart', []);

        if (!empty($carts)) {
            $total = 0;
            $subTotal = 0;

            foreach ($carts as $item) {
                $subTotal += $item['price'] * $item['quantity'];
            }

            $shipping = 30000;

            $total = $subTotal + $shipping;

            return view('clients.orders.create', compact('carts', 'subTotal', 'total', 'shipping'));
        }

        return redirect()->route('cart.list');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrderRequest $request)
    {
        DB::beginTransaction();

        try {
            $params = $request->except('_token');
            $params['sku'] = $this->generateUniqueOrderCode();

            $order = Order::query()->create($params);
            $order_id = $order->id;

            $carts = session()->get('cart', []);

            foreach ($carts as $key => $item) {
                $total = $item['price'] * $item['quantity'];

                $order->OrderDetail()->create([
                    'order_id' => $order_id,
                    'product_id' => $key,
                    'unit_price' => $item['price'],
                    'quanity' => $item['quantity'],
                    'total' => $total,
                ]);
            }

            DB::commit();

            session()->pull('cart', []);

            // Khi tạo thành công 
            // 1. Trừ số lượng

            // 2. Gửi mail khi đặt hàng thành công 
            Mail::to($order->email_receiver)->queue(new OrderConfirm($order));

            return redirect()->route('orders.index')->with('success', 'Tạo đơn hàng thành công');
            } catch (\Exception $exception) {
                DB::rollBack();

                return redirect()->route('cart.list')->with('error', 'Có lỗi khi tạo đơn hàng. Vui lòng thử lại sau');
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    function generateUniqueOrderCode()
    {
        do {
            $orderCode = 'ORD-' . Auth::id() . '-' . now()->timestamp;
        } while (Order::where('sku', $orderCode)->exists());

        return $orderCode;
    }
}
