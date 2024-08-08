@extends('layouts.client')

@section('title')
@endsection

@section('css')
@endsection

@section('content')
    <!-- breadcrumb area start -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <nav aria-label="breadcrumb">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-home"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Order Detail</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- cart main wrapper start -->
    <div class="cart-main-wrapper section-padding">
        <div class="container">
            <div class="section-bg-color">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="myaccount-content">
                            <h5>Thông tin đơn hàng: <span class="text-danger">{{ $order->sku }}</span></h5>
                            <div class="welcome">
                                <p>Người nhận: <strong>{{ $order->receiver }}</strong></p>
                                <p>Email: <strong>{{ $order->email_receiver }}</strong></p>
                                <p>Số điện thoại: <strong>{{ $order->phone_receiver }}</strong></p>
                                <p>Địa chị: <strong>{{ $order->address_receiver }}</strong></p>
                                <p>Ngày đặt hàng: <strong>{{ $order->created_at->format('d-m-Y') }}</strong></p>
                                <p>Tiền hàng: <strong>{{ number_format($order->subtotal, 0, '', '.') }} VNĐ</strong></p>
                                <p>Tiền ship: <strong>{{ number_format($order->shipping, 0, '', '.') }} VNĐ</strong></p>
                                <p>Tổng tiền: <strong>{{ number_format($order->total, 0, '', '.') }} VNĐ</strong></p>
                                <p>Ghi chú: <strong>{{ $order->note }}</strong></p>
                                <p>Trạng thái đơn hàng: <strong>{{ $statusOrder[$order->status_order] }}</strong></p>
                                <p>Trạng thái thanh toán: <strong>{{ $statusPayment[$order->status_payment] }}</strong></p>
                            </div>

                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <!-- Cart Table Area -->
                            <div class="myaccount-content">
                                <h5>Sản phẩm</h5>
                                <div class="myaccount-table table-responsive text-center">
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
                                                        <img src=" {{ Storage::url($product->img_thumnail)}}" alt="" class="img-fluid" width="100px">
                                                       
                                                    </td>
                                                    <td>{{ $product->sku }}</td>
                                                    <td>{{ $product->name }}</td></td>
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
                </div>
            </div>
        </div>
    </div>
    <!-- cart main wrapper end -->
@endsection


@section('js')
@endsection
