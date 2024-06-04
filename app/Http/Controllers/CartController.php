<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
    $product = Product::find($request->input('product_id'));
    // dd( $product);
    $uuid = Str::uuid()->toString();
    $cartData = new Cart();
    $cartData->uuid = $uuid;
    $cartData->product_id  = $product->id;
    $cartData->customer_id = auth('customer')->user()->id;
    $cartData->quantity = 1;
    $cartData->totalprice = $product->price;
    $cartData->status = 'Active';
    $cartData->save();
    // dd($cartData);
    return view('customer.pages.checkout.index');
    }
    // public function showCart(){
    //     $cartProduct = DB::table('carts')->get();
    //     dd($cartProduct);
    //     return view('customer.pages.category.detail',compact('cartProduct'));
    // }

    // public function index($id){
    //     $product = Product::find($id);
    //     return view('customer.pages.checkout.index',compact('product'));
    // }
}
