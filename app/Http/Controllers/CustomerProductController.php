<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerProductController extends Controller
{
        // public function showlist(){
            // $productlist = DB::table('products')
            // ->join('categories','categories.id','=','products.category_id')
            // ->join('suppliers','suppliers.id','=','products.supplier_id')
            // // ->join('admins','admins.id','=','products.admin_id')
            // ->where('products.status','=','Active')
            // ->select('products.*','categories.name as category_name','suppliers.brand_name as brand')
            // ->get();
            // return view('customer.pages.category.products',compact('productlist'));

            //}
            public function showlist(){
                $product = Product::all();
                return view('customer.pages.category.products',compact('product'));
            }
            public function detail($id){
                $product = Product::find($id);
                return view('customer.pages.category.detail',compact('product'));
            }
            // public function womenproductlist(){
            //     $women = Product::all();
            //     return view('customer.pages.category.womenproducts',compact('women'));
            // }
            // public function womenproductlist(){
            //     $women = DB::table('products')
            //     ->where('products.status','=','')
            // }
            public function menproductlist(){
                $men = Product::all();
                return view('customer.pages.category.menproducts',compact('men'));
            }
            public function search(){
                
                return view('customer.pages.category.products');
            }
    }

