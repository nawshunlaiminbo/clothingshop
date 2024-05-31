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
            public function productlist($id){
                $productlist = DB::table('products')
                ->join('categories','categories.id','=','products.category_id')
                ->where('products.status','=','Active')
                ->where('products.category_id','=',$id)
                ->select('products.*','categories.name as categoryname')
                ->get();
                $productid = $id;
                return view('customer.pages.category.allproducts',compact('productlist', 'productid'));
            }
            // public function menproductlist(){
            //     $men = DB::table('products')
            //     ->join('categories','categories.id','=','products.category_id')
            //     ->where('products.status','=','Active')
            //     ->where('products.category_id','=',1)
            //     ->select('products.*','categories.name as categoryname')
            //     ->get();
            //     return view('customer.pages.category.menproducts',compact('men'));
            // }
           
            public function search(){
                
                return view('customer.pages.category.products');
            }
    }

