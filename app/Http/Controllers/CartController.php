<?php

namespace App\Http\Controllers;

use Stripe\Charge;
use Stripe\Stripe;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
//     public function addToCart(Request $request, $id)
//     {
//     $product = Product::find($request->input('product_id'));
//     // dd( $product);
//     $uuid = Str::uuid()->toString();
//     $cartData = new Cart();
//     $cartData->uuid = $uuid;
//     $cartData->product_id  = $product->id;
//     $cartData->customer_id = auth('customer')->user()->id;
//     $cartData->quantity = 1;
//     // $cartData->size = $request->size;
//     $cartData->totalprice = $product->price;
//     $cartData->status = 'Active';
//     // $cartData->paymentmethod = null;
//     $cartData->save();
//     // dd($cartData);
//    $cartList = DB::table('carts')
//         ->join('products','products.id','=','carts.product_id')
//         ->join('customers','customers.id','=','carts.customer_id')
//         ->where('carts.customer_id','=',auth('customer')->user()->id)
//         ->where('carts.status','=','Active')
        
//         // ->select('carts.*','products.id as product_id','products.name as product_name')
//         ->get();
//     return view('customer.pages.category.productdetail',compact('cartList'));
//     }

//add to cart

public function addToCart(Request $request){
    //    dd($request->all());
        // $product = Product::find();
        $size = $request->size;
        $addToCart = $request->addToCart;
        $product_id = $request->product;
        $productdata = Product::find($product_id);
        // dd($request->addQty);
        $cartarray = [];
        // dd(session()->get('cartdata'));
        if($addToCart == true){
            if ($request->session()->has('cartdata')) {
                $cartarray = $request->session()->get('cartdata',[]);
                $sameproduct = false;
                foreach ($cartarray as $key => &$value) {
                    // var_dump($value);
                    //  dd($cartarray{});
                    if ($value['product'] == $product_id && $value['size'] == $size) {
                        if($request->addQty){
                            $value['quantity'] += 1;
                        }
                        elseif($request->removeQty == true && $value['quantity']>1){
                            $value['quantity'] -= 1;
                        }
                        // elseif($request->removeQty == true && $value['quantity']<=1){
                        //     unset($cartarray[$key]);
                        // }
                        elseif($request->removeFromCart){
                            unset($cartarray[$key]);
                        }
                        $sameproduct = true;
                        break;
                    }
                }
                if(!$sameproduct && !$request->removeFromCart){
                    $cartarray[] = ['product' => $product_id,'quantity'=>1,'size'=>$size,'name'=>$productdata->name,'image'=>$productdata->image, 'price' =>$productdata->price];
                    // dd($cartarray);
                }
                $request->session()->put('cartdata',$cartarray);
            }
            else{
                $request->session()->put('cartdata',['product'=>$product_id,'quantity'=>1,'size'=>$size,'name'=>$productdata->name,'image'=>$productdata->image, 'price' =>$productdata->price]);
            }

        }
        $cartarray = $request->session()->get('cartdata')??[];
        // dd($cartarray,$productdata);
        $productGender = $productdata->gender;
        $productByGender = Product::where('gender', '=', $productGender)    ->where('status','=','Active')->take(5)->get();
        return view('customer.pages.category.productdetail',compact('productdata','cartarray','productByGender'));


        
    }

    public function checkout(Request $request){
        $logindata = Customer::find($request->id);
        $uuid = Str::uuid()->toString();
        $logindata->uuid = $uuid;
        $logindata->firstname = $request->fname;
        $logindata->lastname = $request->lname;
        $logindata->email = $request->email;
        $logindata->phone = $request->phone;
        $logindata->address = $request->address;
        $logindata->state = $request->state;
        $logindata->zipcode = $request->zipcode;
        $logindata->update();
        return view('customer.pages.checkout.index');
    }


    // public function showCart(){
    //     $cartProduct = DB::table('carts')->get();
       
    //     return view('customer.pages.category.detail',compact('cartProduct'));
    // }
    
    // public function index($id){
    //     $product = Product::find($id);
    //     return view('customer.pages.checkout.index',compact('product'));
    // }
  
    public function checkoutlist(){
        // $cartList = DB::table('carts')
        // ->join('products','products.id','=','carts.product_id')
        // ->where('carts.status','=','Active')
        // ->where('products.id','=','carts.product_id')
        // ->select('carts.*','products.id as product_id','products.name as product_name')
        // ->get();

       
        // $cartList = Cart::find($id);
        // dd($id);
            $cartList = DB::table('carts')->get();
           
      
        return view('customer.pages.checkout.checkout',compact('cartList'));
       }

    //    public function stripe(){
    //     return view('');
    // }
    // public function stripePost(Request $request){
    //     Stripe::setApiKey(env('STRIPE_SECRET'));
    //     Charge::create([
    //         "amount"=> 10*100,
    //         "currency"=> "usd",
    //         "source"=> $request->stripeToken,
    //         "description"=>"Test Payment From O-Tech"
    //     ]);
    //     return ;
    // }
}
