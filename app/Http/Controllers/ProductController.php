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

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|min:10|max:500',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand'=>'required|string',
            'category'=>'required',
            'price'=>'required',
            'gender'=>'required',
            's'=>'required',
            'm'=>'required',
            'l'=>'required',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'description.required' => 'Description field is required.',
            'description.string' => 'Description must be a string.',
            'descrption.min' => 'Description may not be less than 10 characters.',
            'description.max' => 'Description may not be greater than 500 characters.',
            'image.required'=> 'Image is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max' => 'The image size must not exceed 500 KB.',
            'brand.required' => 'Brand field is required.',
            'brand.string'=>'Brand must be string',
            'category.required' => 'Category field is required',
            'price.required'=> 'Price field is required.',
            'gender.required' => 'Gender field is required.',
            's.required' => 'Small size field is required.',
            'm.required' => 'Medium size field is required.',
            'l.required' => 'Large size field is required.',
        ]);
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
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|min:10|max:500',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'brand'=>'required|string',
            'category'=>'required',
            'price'=>'required',
            'gender'=>'required',
            's'=>'required',
            'm'=>'required',
            'l'=>'required',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'description.required' => 'Description field is required.',
            'description.string' => 'Description must be a string.',
            'descrption.min' => 'Description may not be less than 10 characters.',
            'description.max' => 'Description may not be greater than 500 characters.',
            'image.required'=> 'Image is required.',
            'image.image' => 'The file must be an image.',
            'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
            'image.max' => 'The image size must not exceed 500 KB.',
            'brand.required' => 'Brand field is required.',
            'brand.string'=>'Brand must be string',
            'category.required' => 'Category field is required',
            'price.required'=> 'Price field is required.',
            'gender.required' => 'Gender field is required.',
            's.required' => 'Small size field is required.',
            'm.required' => 'Medium size field is required.',
            'l.required' => 'Large size field is required.',
        ]);

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
        $data[] = [$productname,'LIKE','%'.$request->name.'%'];
    }
    elseif($request->min_price != null){
        // dd("reach min");
        $data[]= [$productprice,'>=',$request->min_price];
    }
    elseif($request->max_price != null){
        // dd("reach max");
        $data[]= [$productprice,'<=',$request->max_price];
    }
    elseif($request->max_price != null && $request->min_price !=null)
    {
        // dd("reach max and min");
        $data[] = [$productprice, '>=', $request->min_price];
        $data[] = [$productprice, '<=', $request->max_price];
    }
    elseif($request->category != null){
        // dd("reach Category");
        $data[] = [$productcategory,'=',$request->category];
    }
    // dd($data);
        $productlist = DB::table('products')
        ->join('categories','categories.id','=','products.category_id')
        ->join('suppliers','suppliers.id','=','products.supplier_id')
        ->join('admins','admins.id','=','products.admin_id')
        ->where('products.status','=','Active')
        ->where($data)
        ->select('products.*','categories.name as category_name','suppliers.brand_name as brand')
        ->orderBy('products.id','desc')
        ->paginate(3);
      
        // dd($productlist);
        // return redirect()->route('ProductList',compact('categories','productlist'));
        return view('admin.pages.product.index',compact('productlist','categories'));

  }

  }