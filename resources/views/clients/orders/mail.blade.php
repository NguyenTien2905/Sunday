@component('mail::message')
    # Xác nhận đơn hàng

    Xin chào {{ $order->receiver }},

    Cảm ơn bạn đã dặt hàng từ cửa hàng của chúng tôi. Đây là thông tin đơn hàng:

    *** Mã đơn hàng: ** {{ $order->sku }}

    *** Sản phẩm: **
    @foreach ($order->OrderDetail as $detail)
        - {{ $detail->product->name }} x {{ $detail->quanity}}: {{ number_format($detail->total) }} VNĐ
    @endforeach

    *** Tống tiền ** {{ number_format($order->total) }} VNĐ

    Chúng tôi sẽ liên hệ với bạn sớm nhất để xác nhận thông tin giao hàng.

    Hãy luôn theo dôi đơn hàng của bạn. Chúc bạn có niềm vui khi mua sắm tại cửa hàng của chúng tôi!!!

    Cảm ơn bạn mua sắm tại cửa hàng.

    Trân trọng
@endcomponent
