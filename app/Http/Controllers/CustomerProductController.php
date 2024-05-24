<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
        public function showdata(){
            $productlist = DB::table('products')
            ->join('categories','categories.id','=','products.category_id')
            ->join('suppliers','suppliers.id','=','products.supplier_id')
            ->join('admins','admins.id','=','products.admin_id')
            ->where('products.status','=','Active')
            ->select('products.*','categories.name as category_name','suppliers.brand_name as brand')
            ->get();
            return view('customer.pages.category.women.blouse',compact('productlist'));
        }
    }

