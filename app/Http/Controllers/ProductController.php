<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function list(){
        $productlist = DB::table('products')
        ->join('categories','categories.id','=','products.category_id')
        ->join('suppliers','suppliers.id','=','products.supplier_id')
        ->join('admins','admins.id','=','products.admin_id')
        ->where('products.status','=','Active')
        ->select('products.*','categories.name as category_name','suppliers.brand_name as brand')
        ->paginate(3);
        // $products = Product::paginate(10);
        $categories = DB::table('categories')
        ->where('status','=','Active')
        ->select('id','name')
        ->get();
        return view('admin.pages.product.index',compact('productlist','categories'));
    }
   
    public function register(){
        $suppliers = DB::table('suppliers')
        ->where('status','=','Active')
        ->select('id','name','brand_name')
        ->get();
        $categories = DB::table('categories')
        ->where('status','=','Active')
        ->select('id','name')
        ->get();
        return view('admin.pages.product.add_product',compact('suppliers','categories'));
    }
    public function registerprocess(Request $request){
        //$request->s
        $uuid = Str::uuid()->toString();
        $image= $uuid.'.'.$request->image->extension();
        $request->image->move(public_path('image/admin/products_info'),$image);
        $product = new Product();
        $product->uuid = $uuid;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->colorimage = $image;
        $product->supplier_id = $request->brand;
        $product->category_id= $request->category;
        $product->admin_id= auth('admin')->id();
        $product->status = 'Active';
        $product->price = $request->price;
        $product->gender = $request->gender;
        $product->small_qty = $request->s;
        $product->medium_qty = $request->m;
        $product->large_qty = $request->l;
        $product->save();
        return redirect()->route('ProductList');
    }
    public function listedit($id){
        $suppliers = DB::table('suppliers')
        ->where('status','=','Active')
        ->select('id','name','brand_name')
        ->get();
        $categories = DB::table('categories')
        ->where('status','=','Active')
        ->select('id','name')
        ->get();
        $productdata = Product::find($id);
        return view('admin.pages.product.update_product',compact('suppliers','categories','productdata'));

    }
    public function updateprocess(Request $request){
        // dd($request);
        $productdata = Product::find($request->id);
        $uuid = Str::uuid()->toString();
        $image= $uuid.'.'.$request->image->extension();
        // dd($image);
        $request->image->move(public_path('image/admin/products_info'),$image);

        $productdata->uuid = $uuid;
        $productdata->name = $request->name;
        $productdata->description = $request->description;
        $productdata->colorimage = $image;
        $productdata->supplier_id = $request->brand;
        $productdata->category_id= $request->category;
        $productdata->admin_id= auth('admin')->id();
        $productdata->price = $request->price;
        $productdata->gender = $request->gender;
        $productdata->small_qty = $request->s;
        $productdata->medium_qty = $request->m;
        $productdata->large_qty = $request->l;
        $productdata->update();
        return redirect()->route('ProductList');

    }
    public function destroy($id){
        $productlist = Product::find($id);
        $productlist->status = 'Inactive';
        $productlist->update();
        return redirect()->route('ProductList');
  }
  public function filter(Request $request){
// dd($request->all());
    // $suppliers = DB::table('suppliers')
    // ->where('status','=','Active')
    // ->select('id','name','brand_name')
    // ->get();
    $categories = DB::table('categories')
    ->where('status','=','Active')
    ->select('id','name')
    ->get();
    $productname = 'products.name';
    $productprice = 'products.price';
    $productcategory = 'products.category_id';

    $data = [];
    if($request->name != null){
        // $name = $productname;
        // $data = $request->name;
        $data[] = [$productname,'LIKE','%'.$request->name.'%'];
    }
    if($request->min_price != null){
        $data[]= [$productprice,'>=',$request->min_price];
    }
    if($request->max_price != null){
        $data[]= [$productprice,'<=',$request->max_price];
    }
    if($request->max_price && $request->min_price)
    {
        $data[] = [$productprice, '>=', $request->min_price];
        $data[] = [$productprice, '<=', $request->max_price];
    }
    if($request->category){
        $data[] = [$productcategory,'=',$request->category];
    }
    // dd($data);
        $productlist = DB::table('products')
        ->join('categories','categories.id','=','products.category_id')
        ->join('suppliers','suppliers.id','=','products.supplier_id')
        ->join('admins','admins.id','=','products.admin_id')
        ->where($data)
        ->where('products.status','=','Active')
        ->select('products.*','categories.name as category_name','suppliers.brand_name as brand')
        ->orderBy('products.id','desc')
        ->paginate(3);
        // dd($productlist);
        // return redirect()->route('ProductList',compact('categories','productlist'));
        return view('admin.pages.product.index',compact('productlist','categories'));

  }

  }