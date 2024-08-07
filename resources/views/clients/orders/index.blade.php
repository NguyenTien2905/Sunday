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
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Cart Table Area -->
                        <div class="cart-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Ngày dặt</th>
                                        <th>Trạng thái</th>
                                        <th>Tổng tiền</th>
                                        <th>Hành động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $item)
                                        <tr>
                                            <td>
                                                <a href="{{ route('orders.show', $item->id) }}">{{ $item->sku }}
                                                </a>
                                            </td>
                                            <td>{{ $item->created_at->format('d-m-Y') }}</td>
                                            <td>{{ $statusOrder[$item->status_order] }}</td>
                                            <td>{{ number_format($item->total, 0, '', '.') }} đ</td>
                                            <td>
                                                <a href="{{ route('orders.show', $item->id) }}" class="btn btn-sqr">
                                                    View
                                                </a>
                                                <form action="{{ route('orders.update', $item->id)}}" method="post" class="d-inline">
                                                    @csrf
                                                    @method('PUT')
                                                    @if ($item->status_order === $type_wait_for_comfirmation)
                                                        <input type="hidden" name="cancel" value="1">
                                                        <button class="btn btn-sqr bg-danger" type="submit" onclick="return confirm('Bạn có chắc chắn hủy đơn hàng không ?')">Hủy</button>
                                                    @elseif($item->status_order === $type_shipping)
                                                    <input type="hidden" name="delivered" value="1">
                                                    <button class="btn btn-sqr bg-success" type="submit" onclick="return confirm('Xác nhận bạn đã nhận hàng ')">Đã nhận hàng</button>
                                                    @endif
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- Cart Update Option -->
                            <div class="cart-update-option d-block d-md-flex justify-content-end">
                                <div class="cart-update">
                                    <button type="submit" class="btn btn-sqr">Update Cart</button>
                                </div>
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
