<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
   
    public function register(){
        $role = DB::table('roles')
        ->select('id','name')->where('status','=','Active')
        ->get();
        return view('admin.pages.category.add_category',compact('role'));
    }
    public function registerprocess(Request $request){
        
        $request->validate([
            'name' => 'required|string|max:255|unique:categories,name',
        ], [
            'name.required' => 'The name field is required.',
        ]);
        $category = new Category();
        $uuid = Str::uuid()->toString();
        $category->name = $request->name;
        $category->status = 'Active';
        $category->admin_id = auth('admin')->user()->id;
        $category->uuid = $uuid;
        $category->save();
        return redirect()->route('CategoryList');
    }
    
    public function categorylist(){
        // dd("reach");
        $categorylist = DB::table('categories')
        ->join('admins','admins.id','=','categories.admin_id')
        ->where('categories.status','=','Active')
        ->select('categories.*','admins.name as adminname')
        ->paginate('10');
        return view('admin.pages.category.index',compact('categorylist'));
    }
    public function listedit($id){
        $categorydata = Category::find($id);
        // dd($categorydata);
        return view('admin.pages.category.update_category',compact('categorydata'));
    }
    public function updateprocess(Request $request){
        $categorydata = Category::find($request->id);
        $uuid = Str::uuid()->toString();
        $categorydata->name = $request->name;
        $categorydata->uuid = $uuid;
        $categorydata->update();
        // dd($categorydata);
        return redirect()->route('CategoryList');
    }
    public function destroy($id){
        $categorylist = Category::find($id);
        $categorylist->status = 'Inactive';
        $categorylist->update();
        return redirect()->route('CategoryList');
    }
    public function filter(Request $request){

        $categoryname = 'categories.name';
            
        $data = [];
            if($request->category != null){
            $data[] = [$categoryname,'LIKE','%'.$request->category.'%'];
   }
    // dd($data);

    $categorylist = DB::table('categories')
    ->join('admins','admins.id','=','categories.admin_id')
    ->where('categories.status','=','Active')
    ->select('categories.*','admins.name as adminname')
    ->paginate('10');
       
        // dd($categorylist);
        return view('admin.pages.category.index',compact('categorylist'));
    }
}
