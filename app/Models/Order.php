<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    const STATUS_ORDER = [
        'WAIT_FOR_CONFIRMATION' => 'Chờ xác nhận',
        'CONFIRMED' => 'Đã xác nhận',
        'PREPARING' => 'Dang chuẩn bị ',
        'SHIPPING' => 'Đang vận chuyển',
        'DELIVERED' => 'Đã giao hàng',
        'CANCELED' => 'Đơn hàng đã hủy',
    ];


    const STATUS_PAYMENT = [
        'UNPAID' => 'Chưa thanh toán',
        'PAID' => 'Đã thanh toán',
    ];

    const WAIT_FOR_CONFIRMATION = 'WAIT_FOR_CONFIRMATION';
    const CONFIRMED = 'CONFIRMED';
    const PREPARING = 'PREPARING';
    const SHIPPING = 'SHIPPING';
    const DELIVERED = 'DELIVERED';
    const CANCELED = 'CANCELED';

    const UNPAID = 'UNPAID';
    const PAID = 'PAID';

    protected $fillable = [
        'sku',
        'user_id',
        'receiver',
        'email_receiver',
        'phone_receiver',
        'address_receiver',
        'note',
        'status_order',
        'status_payment',
        'subtotal',
        'shipping',
        'total',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function OrderDetail(){
        return $this->hasMany(OrderDetail::class);
    }   

}
