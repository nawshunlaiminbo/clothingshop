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
  public function showlist(Request $request)
  {
    // dd($request->all());
    $productid = $request->productid;
    if ($productid != null) {
      $productlist = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.category_id')

        ->where('products.category_id', '=', $productid)
        ->where('products.status', '=', 'Active')
        ->select('products.*', 'categories.name as categoryname')
        ->get();
    } else {
      $productlist = Product::where('status', '=', 'Active')->get();
    }
    // $productimage = DB::table('products')
    // ->join('categories', 'categories.id', '=', 'products.category_id')
    // ->where('products.status', '=', 'Active')
    // ->where('products.category_id', '=', $productid)
    // ->select('products.*')
    // ->limit(1)->get();
    // dd($productimage[0]->colorimage);
    return view('customer.pages.category.allproducts2', compact('productlist', 'productid'));
  }
  public function detail(Request $request, $id)
  {
    $cartarray = $request->session()->get('cartdata') ?? [];
    $product = Product::find($id);
    if (!$product) {
      return redirect()->route('CustomerProductList');
    }

    $relatedProducts = Product::where('category_id', $product->category_id)
      ->where('id', '!=', $id)
      ->limit(4)
      ->get();
    return view('customer.pages.category.productdetail', compact('product', 'relatedProducts'));
  }


  // public function womenproductlist(){
  //     $women = Product::all();
  //     return view('customer.pages.category.womenproducts',compact('women'));
  // }
  public function productlist($id)
  {
    $productlist = DB::table('products')
      ->join('categories', 'categories.id', '=', 'products.category_id')
      ->where('products.status', '=', 'Active')
      ->where('products.category_id', '=', $id)
      ->select('products.*', 'categories.name as categoryname')
      ->get();
    $productid = $id;
    
    return view('customer.pages.category.allproducts2', compact('productlist', 'productid'));
  }

  public function productfilter(Request $request)
  {
    // dd($request->all());

    $order = $request->order;
    $products = [
      'products.name' => 'Product Name',
      'products.price' => 'Product Price',
      'products.gender' => 'Gender',
      'products.description' => 'Description',

    ];
    $query = Product::query();
    $productid = $request->productid;
    // dd($productid);
    if ($request->productid == null) {
      if (!empty($request->search)) {
        $searchInput = $request->search;

        $query->where(function ($subQuery) use ($products, $searchInput) {
          foreach (array_keys($products) as $product) {
            $subQuery->orWhere($product, 'LIKE', '%' . $searchInput . '%');
          }
        });

        $productlist = $query
          ->where('status', '=', 'Active')
          ->select('products.*')
          ->get();
        // dd($productlist);
        return view('customer.pages.category.allproducts2', compact('productid', 'productlist'));
      } elseif ($request->order == "asc") {
        $query->orderBy('price', $order);
        $productlist = $query
          ->where('status', '=', 'Active')
          ->select('products.*')
          ->get();
        return view('customer.pages.category.allproducts2', compact('productid', 'productlist'));
      } elseif ($request->order == "desc") {
        $query->orderBy('price', $order);
        $productlist = $query
          ->where('status', '=', 'Active')
          ->select('products.*')
          ->get();
        return view('customer.pages.category.allproducts2', compact('productid', 'productlist'));
      }
    } else {
      
      if (!empty($request->search)) {
        $searchInput = $request->search;

        $query->where(function ($subQuery) use ($products, $searchInput,$productid) {
          
          foreach (array_keys($products) as $product) {
            $subQuery->orWhere($product, 'LIKE', '%' . $searchInput . '%')
                      ->where('category_id','=',$productid);
                      
          }
        });

        $productlist = $query
          ->where('status', '=', 'Active')
          ->select('products.*')
          ->get();
          // $productid = null;
        // dd($productlist);
        return view('customer.pages.category.allproducts2', compact('productid', 'productlist'));
      } elseif ($request->order == "asc") {
        $query->orderBy('price', $order);
        $productlist = $query
          ->where('status', '=', 'Active')
          ->select('products.*')
          ->get();
          // $productid = null;
        return view('customer.pages.category.allproducts2', compact('productid', 'productlist'));
      } elseif ($request->order == "desc") {
        $query->orderBy('price', $order);
        $productlist = $query
          ->where('status', '=', 'Active')
          ->select('products.*')
          ->get();
          // $productid = null;

        return view('customer.pages.category.allproducts2', compact('productid', 'productlist'));
      }
    }
  }
}
