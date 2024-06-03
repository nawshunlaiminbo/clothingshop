<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function list(){

        return view('admin.pages.order.index');
    }
    // public function placeOrder()
    // {
    //     $cartItems = Cart::where('customer_id', auth()->id())->get();
    //     if ($cartItems->isEmpty()) {
    //         return redirect()->back()->with('error', 'Your cart is empty!');
    //     }

    //     $total = $cartItems->sum(function($cartItem) {
    //         return $cartItem->quantity * $cartItem->product->price;
    //     });

    //     $order = Order::create([
    //         'customer_id' => auth()->id(),
    //         'total' => $total,
    //     ]);

    //     foreach ($cartItems as $cartItem) {
    //         $order->products()->attach($cartItem->product_id, [
    //             'quantity' => $cartItem->quantity,
    //             'price' => $cartItem->product->price,
    //         ]);
    //         $cartItem->delete();
    //     }

    //     return redirect()->route('orderview');
    // 
}
