<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title = "Danh sách Đơn hàng";

        $orders = Order::query()->orderByDesc('id')->get();

        $statusOrder = Order::STATUS_ORDER;

        $type_canceled = Order::CANCELED;

        return view('admins.orders.index', compact('title', 'orders', 'statusOrder', 'type_canceled'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $title = "Chi tiết đơn hàng";

        $order = Order::query()->findOrFail($id);

        $statusOrder = Order::STATUS_ORDER;
        $statusPayment = Order::STATUS_PAYMENT;

        return view('admins.orders.show', compact('title', 'order', 'statusOrder', 'statusPayment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $order = Order::query()->findOrFail($id);
        $currentStatus = $order->status_order;

        $newStatus = $request->input('status_order');

        $status = array_keys(Order::STATUS_ORDER);

        // Kiểm tra nếu hủy thì không thay đổi status
        if ($currentStatus === Order::CANCELED) {
            return redirect()->route('admins.orders.index')->with('error', 'Đơn hàng đã bị hủy không thể thay đổi trạng thái');
        }

        // Kiểm tả không thể quay lại status trước status hiện tại
        if (array_search($newStatus, $status) < array_search($currentStatus, $status)) {
            return redirect()->route('admins.orders.index')->with('error', 'Không thể cập nhật trạng thái trước đó');
        }

        $order->status_order = $newStatus;

        $order->save();

        return redirect()->route('admins.orders.index')->with('success', 'Cập nhật trạng thái thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //Khi khách hủy thì mới có thể xóa (Xóa mềm)
        $order = Order::query()->findOrFail($id);

        if ($order && $order->status_order == Order::CANCELED) {
            $order->OrderDetail()->delete();
            $order->delete();

            return redirect()->back()->with('success', 'Xóa đơn hành thành công');
        }

        return redirect()->back()->with('error', 'Không thể xóa đơn hàng');
    }
}
