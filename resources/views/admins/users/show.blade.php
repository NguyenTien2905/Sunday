@extends('layouts.admin')

@section('title')
    {{ $title }}
@endsection

@section('css')
@endsection

@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-xxl">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Quản lý đơn hàng</h4>
                </div>
            </div>

            <div class="col-xl-12">
                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title mb-0">Thông tin chi tiết đơn hàng</h5>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <table class="table table-stripped md-0">
                            <thead>
                                <th>Thông tin tài khoản đặt hàng</th>
                                <th>Thông tin người nhận</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <ul>
                                            <li>Tên tài khoản: <b>{{ $order->user->name }}</b></li>
                                            <li>Email: <b>{{ $order->user->email }}</b></li>
                                            <li>Số điện thoại: <b>{{ $order->user->phone }}</b></li>
                                            <li>Địa chị: <b>{{ $order->user->address }}</b></li>
                                            <li>Tài khoản: <b>{{ $order->user->role }}</b></li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>Người nhận: <b>{{ $order->receiver }}</b></li>
                                            <li>Email: <b>{{ $order->email_receiver }}</b></li>
                                            <li>Số điện thoại: <b>{{ $order->phone_receiver }}</b></li>
                                            <li>Địa chị: <b>{{ $order->address_receiver }}</b></li>
                                            <li>Ngày đặt hàng: <b>{{ $order->created_at->format('d-m-Y') }}</b></li>
                                            <li>Ghi chú: <b>{{ $order->note }}</b></li>
                                            <li>Trạng thái đơn hàng: <b>{{ $statusOrder[$order->status_order] }}</b>
                                            </li>
                                            <li>Trạng thái thanh toán:
                                                <b>{{ $statusPayment[$order->status_payment] }}</b>
                                            </li>
                                            <li>Tiền hàng: <b>{{ number_format($order->subtotal, 0, '', '.') }}
                                                    VNĐ</b></li>
                                            <li>Tiền ship: <b>{{ number_format($order->shipping, 0, '', '.') }}
                                                    VNĐ</b></li>
                                            <li class="fs-5 text-danger">Tổng tiền: <b>{{ number_format($order->total, 0, '', '.') }} VNĐ</b>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="card">

                    <div class="card-header">
                        <h5 class="card-title mb-0">Thông tin sản phẩm</h5>
                    </div><!-- end card header -->

                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead class="thead-light">
                                <tr>
                                    <th>Hình ảnh</th>
                                    <th>Mã Sản phẩm</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Đơn giá</th>
                                    <th>Số lượng</th>
                                    <th>Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->OrderDetail as $item)
                                    @php
                                        $product = $item->product;
                                    @endphp
                                    <tr>
                                        <td>
                                            <img src=" {{ Storage::url($product->img_thumnail) }}" alt=""
                                                class="img-fluid" width="100px">

                                        </td>
                                        <td>{{ $product->sku }}</td>
                                        <td>{{ $product->name }}</td>
                                        </td>
                                        <td>{{ number_format($item->unit_price, 0, '', '.') }} VNĐ</td>
                                        <td>{{ $item->quanity }}</td>
                                        <td>{{ number_format($item->total, 0, '', '.') }} VNĐ</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <!-- container-fluid -->
    </div>
@endsection

@section('js')
@endsection
