@extends('layouts.client')

@section('title')
    Thủ tục thanh toán
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
                                <li class="breadcrumb-item active" aria-current="page">Đặt hàng</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb area end -->

    <!-- checkout main wrapper start -->
    <div class="checkout-page-wrapper section-padding">
        <div class="container">
            <form action="{{ route('orders.store') }}" method="POST">
                @csrf
                <div class="row">

                    <!-- Checkout Billing Details -->
                    <div class="col-lg-6">
                        <div class="checkout-billing-details-wrap">
                            <h5 class="checkout-title">Billing Details</h5>
                            <div class="billing-form-wrap">

                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="single-input-item">
                                    <label for="receiver" class="required">Tên người đặt</label>
                                    <input type="text" id="receiver" name="receiver" placeholder="Nhập tên người đặt"
                                        value="{{ Auth::user()->name }}" />
                                    @error('receiver')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="single-input-item">
                                    <label for="email_receiver" class="required">Email người đặt</label>
                                    <input type="email" id="email_receiver" name="email_receiver"
                                        placeholder="Nhập Email người đặt" value="{{ Auth::user()->email }}" />
                                    @error('email_receiver')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="single-input-item">
                                    <label for="phone_receiver" class="required">Số điện thoại người đặt</label>
                                    <input type="text" id="phone_receiver" name="phone_receiver"
                                        placeholder="Nhập SĐT người đặt" value="{{ Auth::user()->phone }}" />
                                    @error('phone_receiver')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="single-input-item">
                                    <label for="address_receiver" class="required">Địa chỉ nhận hàng</label>
                                    <input type="text" id="address_receiver" name="address_receiver"
                                        placeholder="Nhập địa chỉ giao hàng" value="{{ Auth::user()->address }}" />
                                    @error('address_receiver')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="single-input-item">
                                    <label for="ordernote">Ghi chú</label>
                                    <textarea name="ordernote" id="ordernote" name="note" cols="30" rows="3" placeholder="Nhập Ghi chú"></textarea>
                                </div>


                            </div>
                        </div>
                    </div>

                    <!-- Order Summary Details -->
                    <div class="col-lg-6">
                        <div class="order-summary-details">
                            <h5 class="checkout-title">Your Order Summary</h5>
                            <div class="order-summary-content">
                                <!-- Order Summary Table -->
                                <div class="order-summary-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Products</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($carts as $key => $item)
                                                <tr>
                                                    <td><a href="{{ route('product.detail', $key) }}">{{ $item['name'] }}
                                                            <strong> × {{ $item['quantity'] }}</strong></a>
                                                    </td>
                                                    <td>{{ number_format($item['price'] * $item['quantity'], 0, '', '.') }}
                                                        đ
                                                    </td>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>Sub Total</td>
                                                <td>
                                                    <input type="hidden" name="subtotal" value="{{ $subTotal }}">
                                                    <strong>{{ number_format($subTotal, 0, '', '.') }} đ</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Shipping</td>
                                                <td>
                                                    <input type="hidden" name="shipping" value="{{ $shipping }}">
                                                    <strong>{{ number_format($shipping, 0, '', '.') }} đ</strong>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Total Amount</td>

                                                <input type="hidden" name="total" value="{{ $total }}">
                                                <td class="text-danger"><b>{{ number_format($total, 0, '', '.') }} đ</b>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- Order Payment Method -->
                                <div class="order-payment-method">
                                    <div class="single-payment-method show">
                                        <div class="payment-method-name">
                                            <div class="custom-control custom-radio">
                                                <input type="radio" id="cashon"
                                                    class="custom-control-input" checked />
                                                <label class="custom-control-label" for="cashon">Cash On Delivery</label>
                                            </div>
                                        </div>
                                        <div class="payment-method-details" data-method="cash">
                                            <p>Thanh toán bằng tiền mặt khi giao hàng.</p>
                                        </div>
                                    </div>
                                    <div class="summary-footer-area">
                                        <button type="submit" class="btn btn-sqr">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
    <!-- checkout main wrapper end -->
@endsection


@section('js')
@endsection
