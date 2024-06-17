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
            public function showlist(Request $request){
              // dd($request->all());
              $productid = $request->productid;
              if($productid != null){
                $productlist = DB::table('products')
                ->join('categories','categories.id','=','products.category_id')
                ->where('products.status','=','Active')
                ->where('products.category_id','=',$productid)
                ->select('products.*','categories.name as categoryname')
                ->get();
               
              }
              else{
                $productlist = Product::all();
              }
               
                return view('customer.pages.category.allproducts',compact('productlist','productid'));
            }
            public function detail(Request $request, $id){
                $cartarray = $request->session()->get('cartdata') ?? [];
                $product = Product::find($id);
                if(!$product){
                return redirect()->route('CustomerProductList');
              }

                $relatedProducts = Product::where('category_id', $product->category_id)
                ->where('id','!=',$id)
                ->limit(4)
                ->get();
                return view('customer.pages.category.productdetail',compact('product','relatedProducts'));
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
           
      public function filter(Request $request){
        $products = [
          'products.name' => 'Product Name',
          'products.price'=>'Product Price',
          'products.gender'=>'Gender',
          'products.description'=>'Description'
        ];
        $query = Product::query()->where('products.status','=','Active');

        if (!empty($request->search)) {
          $searchInput = $request->search;
           dd($request->all());
          $query->where(function ($subQuery) use ($products, $searchInput) {
              foreach (array_keys($products)as $product) {
                  $subQuery->orWhere($product, 'LIKE', '%' . $searchInput . '%');
              }
          });
      }
      $productlist = $query
      ->where('products.status','=','Active')
      ->select('products.*')
      ->get();

      return view('customer.pages.category.allproducts', compact('products','searchTerm','productlist'));
    }
  }
//     public function filter(Request $request)
//     {
//         $searchTerm = $request->input('search');
     
//         $products = Product::query()
//             ->where('name', 'like', '%' . $searchTerm . '%')
//             ->orWhere('price', 'like', '%' . $searchTerm . '%')
//             ->orWhere('gender', 'like', '%' . $searchTerm . '%')
//             ->orWhere('description', 'like', '%' . $searchTerm . '%')
//             ->get();
          
          
            
//             return view('customer.pages.category.allproducts', compact('products','searchTerm','productlist'));
//     }
// }
