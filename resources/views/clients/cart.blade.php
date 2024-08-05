@extends('layouts.client')

@section('title')
@endsection

@section('css')
    <style>
        .tab-one {
            img {
                max-width: 250px;
            }
        }
    </style>
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
                                <li class="breadcrumb-item"><a href="shop.html">shop</a></li>
                                <li class="breadcrumb-item active" aria-current="page">cart</li>
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
                        <form action="{{ route('cart.update')}}" method="post">
                            @csrf
                            <!-- Cart Table Area -->
                            <div class="cart-table table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="pro-thumbnail">Thumbnail</th>
                                            <th class="pro-title">Product</th>
                                            <th class="pro-price">Price</th>
                                            <th class="pro-quantity">Quantity</th>
                                            <th class="pro-subtotal">Total</th>
                                            <th class="pro-remove">Remove</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cart as $key => $item)
                                            <tr>
                                                <td class="pro-thumbnail"><a href="#"><img class="img-fluid"
                                                            src="{{ Storage::url($item['img_thumnail']) }}"
                                                            alt="Product" /></a>
                                                            <input type="hidden" name="cart[{{$key}}][img_thumnail]" value="{{ $item['img_thumnail'] }}">
                                                </td>
                                                <td class="pro-title"><a
                                                        href="{{ route('product.detail', $key) }}">{{ $item['name'] }}</a>
                                                        <input type="hidden" name="cart[{{$key}}][name]" value="{{ $item['name'] }}">
                                                </td>
                                                <td class="pro-price">
                                                    <span>{{ number_format($item['price'], 0, '', '.') }} đ</span>
                                                    <input type="hidden" name="cart[{{$key}}][price]" value="{{ $item['price'] }}">
                                                </td>
                                                <td class="pro-quantity">
                                                    <div class="pro-qty">
                                                        <input type="text" class="quantityInput"
                                                            data-price="{{ $item['price'] }}"
                                                            value="{{ $item['quantity'] }}" name="cart[{{$key}}][quantity]">
                                                        
                                                    </div>
                                                </td>
                                                <td class="pro-subtotal">
                                                    <span
                                                        class="subTotal">{{ number_format($item['price'] * $item['quantity'], 0, '', '.') }}
                                                        đ</span>
                                                </td>
                                                <td class="pro-remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                            <!-- Cart Update Option -->
                            <div class="cart-update-option d-block d-md-flex justify-content-end">
                                <div class="cart-update">
                                    <button  type="submit" class="btn btn-sqr">Update Cart</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-5 ml-auto">
                        <!-- Cart Calculation Area -->
                        <div class="cart-calculator-wrapper">
                            <div class="cart-calculate-items">
                                <h6>Cart Totals</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tr>
                                            <td>Tien don hang</td>
                                            <td class="sub-total">{{ number_format($subTotal, 0, '', '.') }}
                                                đ</td>
                                        </tr>
                                        <tr>
                                            <td>Tien ship</td>
                                            <td class="shipping">{{ number_format($shipping, 0, '', '.') }}
                                                đ</td>
                                        </tr>
                                        <tr class="total">
                                            <td>Tong tien</td>
                                            <td class="total-amount">{{ number_format($total, 0, '', '.') }}
                                                đ</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <a href="checkout.html" class="btn btn-sqr d-block">Proceed Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cart main wrapper end -->
@endsection


@section('js')
    <script>
        $('.pro-qty').prepend('<span class="dec qtybtn">-</span>');
        $('.pro-qty').append('<span class="inc qtybtn">+</span>');

        function updateTotal() {
            var subTotal = 0;
            // Tinh tong so tien cua cac sp trong gio
            $('.quantityInput').each(function() {
                var $input = $(this);
                var price = parseFloat($input.data('price'));
                var quantity = parseFloat($input.val());
                subTotal += price * quantity;

            })

            // Lay tien ship
            var shipping = parseFloat($('.shipping').text().replace(/\./g, '').replace(' đ', ''));

            var total = subTotal + shipping;

            //update 
            $('.sub-total').text(subTotal.toLocaleString('vi-VN') + 'đ');
            $('.total-amount').text(total.toLocaleString('vi-VN') + 'đ');

        }

        $('.qtybtn').on('click', function() {
            var $button = $(this);
            var $input = $button.parent().find('input')
            var oldValue = parseFloat($input.val());

            if ($button.hasClass('inc')) {
                var newVal = oldValue + 1;
            } else {
                if (oldValue > 1) {
                    var newVal = oldValue - 1;
                } else {
                    var newVal = 1;
                }
            }
            $button.parent().find('input').val(newVal);

            // Cap nhat lai gia tri cau subTotal
            var price = parseFloat($input.data('price'));
            var subtotalElement = $input.closest('tr').find('.subTotal');
            var newSubToatal = newVal * price;

            console.log(subtotalElement);


            subtotalElement.text(newSubToatal.toLocaleString('vi-VN') + 'đ');


            updateTotal();
        });

        //Neu user nhap so am
        $('.quantityInput').on('change', function() {
            var value = parseInt($(this).val(), 10);

            if (isNaN(value) || value < 1) {
                alert('Số lượng phải lớn hơn 1 và phải là số');
                $(this).val(1)
            }

            updateTotal()
        })

        // Xu ly xoa san pham trong cart
        $('.pro-remove').on('click', function() {
            event.preventDefault();
            var $row = $(this).closest('tr');
            $row.remove();

            updateTotal()
        })

        updateTotal()
    </script>
@endsection
