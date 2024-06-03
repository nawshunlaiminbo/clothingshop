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
           
            // public function search(){
                
            //     return view('customer.pages.category.products');
            // }

            public function filter(Request $request){
                // dd($request->all());
            //     $columns = [
            //       'products.name'=> 'Product Name',
            //       'products.price' =>'Price',
            //       'products.gender' => 'Gender',
            //       'products.description' => 'Description',
            //   ];
            
            //   $query = Product::query()->where('products.status','=', 'Active')->where('products.name', 'LIKE','%' .$request->search.'%')->get();
            //   $query = DB::table('products')->where('status','=', 'Active' )->where('products.name', 'LIKE','%' .$request->search.'%')->get();
            $namd = 'Hoodie';
            $query = DB::table('products')
            ->Orwhere('products.name', 'LIKE', '%'.$namd.'%')
            ->orwhere('status','=', 'Active')

            ->get();  
            dd($query);
              $name = 'products.name';
              $price = 'products.price';
              $gender = 'products.gender';
              $description = 'products.description';
              $data = array();
              $data = [$name, $price, $gender,$description];
            //   dd($data);
            if(!empty($request->search)){
                // for($i = 0; $i < count((array)$data); $i++){
                    // dd($data[$i]);
                   $query ->where('products.name', 'LIKE','%' .$request->search.'%');
                    // dd($querydata);
                   
                // }
                
                //  $query->Where($querydata)->get();
            }
            // dd($query->get()->toArray());
             return view('customer.pages.category.products', compact('product'));

            //   dd($query);
            //   if (!empty($request->search)) {
            //       $searchInput = $request->search;
            //     //   dd($searchInput);
            //       $query->where(function ($subQuery) use ($columns, $searchInput) {
                    
            //           foreach (array_keys($columns)as $column=>$label) {
            //               $subQuery->Where($column, 'LIKE', '%' . $searchInput . '%');
            //           }  
                    
            //       });
            //     }
              
            //   $product = Product::all();
                    
              return view('customer.pages.category.products', compact('product'));
              }

              
    }

