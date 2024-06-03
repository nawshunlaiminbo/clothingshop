<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    // public function add(Request $request, $productId)
    // {
    //     $product = Product::findOrFail($productId);
    //     $cart = Cart::firstOrCreate(
    //         ['customer_id' => auth()->id(), 'product_id' => $productId],
    //         ['quantity' => 1]
    //     );

    //     if (!$cart->wasRecentlyCreated) {
    //         $cart->increment('quantity');
    //     }

    //     return redirect()->back()->with('success', 'Product added to cart!');
    // }

    // // public function view()
    // // {
    // //     $cartItems = Cart::with('product')->where('customer_id', auth()->id())->get();
    // //     return view('customer.pages.category.detail', compact('cartItems'));
    // // }
    // public function detail($id){
    //     $product = Product::find($id);
    //     return view('customer.pages.category.detail',compact('product'));
    // }

    // public function index()
    // {
    //     $product = DB::table('products')->get();
    //     return view('customer.pages.category.detail', ['products' => $product]);
    // }
   
    public function addToCart(Request $request)
    {
    //  $productdata = Product::find($request->id);
    // $productdata = $request->input('product_id');

    // return redirect()->route('CartList',compact('productdata'));

   
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
dd($cartData);
    return view('customer.pages.checkout.index');
    }
    // public function index($id){
    //     $product = Product::find($id);
    //     return view('customer.pages.checkout.index',compact('product'));
    // }
}
