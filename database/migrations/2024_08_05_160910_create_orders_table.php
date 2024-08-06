<?php

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique();
            
            // Lưu trữ thông tin tài khoản đặt
            $table->foreignIdFor(User::class)->constrained();

            // Lưu trữ thông tin người nhận
            $table->string('receiver');
            $table->string('email_receiver');
            $table->string('phone_receiver', 10);
            $table->string('address_receiver');
            $table->text('note')->nullable();

            // Lưu trữ thông tin đẻ quản lý đơn hàng
            $table->string('status_order')->default(Order::WAIT_FOR_CONFIRMATION);
            $table->string('status_payment')->default(Order::UNPAID);

            $table->double('subtotal')->comment('Tổng tiền của từng mặt hàng');
            $table->double('shipping')->comment('Tiền ship');
            $table->double('total')->comment('Tổng tiền của cả đơn hàng');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
