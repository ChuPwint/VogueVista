<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cart = new Cart();
        $totalPrice = 0;
        $cartItemCount = 0;
        if (Auth::check()) {
            $status = "logIn";
            $userId = Auth::id();
            $cartItems = $cart->getAllItems($userId);
            $cartItemCount = $cart->getItemCount($userId);

            // Calculate the total price
            foreach ($cartItems as $item) {
                $totalPrice += $item->products->price * $item->quantity;
            }
        } else {
            $status = "logOut";
            $cartItems = [];
        }

        return view("payment", [
            "allItems" => $cartItems,
            'status' => $status,
            'cartItems' => $cartItemCount,
            "totalPrice" => $totalPrice,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->action == "cash") {
            $paymentMethod = 1;
        } else if ($request->action == "card") {
            $request->validate([
                'cardNum' => 'required|digits:16',
                'cardName' => 'required|string|max:255',
                'expireDate' => 'required|date_format:Y-m',
                'cvv' => 'required|digits:3',
                'billAddress' => 'required|string|max:255',
                'postalCode' => 'required|digits_between:4,6',
            ]);
            $paymentMethod = 2;
        }
        $shippingDetails = session("shipping_details");
        // dd($request->action, $request->inCart, $shippingDetails);
        $request->session()->put('orderItems', $request->inCart);

        $deliName = $shippingDetails["deliName"];
        $address = $shippingDetails["address"];
        $region = $shippingDetails["region"];
        $postalCode = $shippingDetails["postalCode"];
        $phone = $shippingDetails["phone"];
        // dd($deliName);

        $orderClass = new Order();

        $request->session()->put('paymentMethod', $request->action);

        $order = $orderClass->createOrder(Auth::id(), $paymentMethod, $request->total, $deliName, $address, $region, $postalCode, $phone);

        $inCart = json_decode($request->inCart, true); // Decode JSON string to an array
        // dd($inCart);
        $orderDetails = array_map(function ($item) use ($order) {
            return [
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'totalPrice' => $item['quantity'] * $item['products']['price'],
            ];
        }, $inCart);

        $orderDetail = $orderClass->createManyOrderDetails($order, $orderDetails);
        $cart = new Cart();
        $cart->clearCart(Auth::id());
        return redirect()->route("thankyou");
    }
}
