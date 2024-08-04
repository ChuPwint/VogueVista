<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'totalPrice',
        'payment_method_id',
        'deliveryName',
        'deliveryAddress',
        'region',
        'postalCode',
        'phone',
    ];

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class, 'order_id', 'id');
    }

    public function createOrder($userId, $payId, $totalPrice, $deliName, $address, $region, $postalCode, $phone)
    {
        return Order::create([
            'user_id' => $userId,
            'totalPrice' => $totalPrice,
            'payment_method_id' => $payId,
            'deliveryName' => $deliName,
            'deliveryAddress' => $address,
            'region' => $region,
            'postalCode' => $postalCode,
            'phone' => $phone,
        ]);
    }

    public function createManyOrderDetails($order, $cartItems)
    {
        return $order->orderDetails()->createMany(
            $cartItems
        );
    }
}
