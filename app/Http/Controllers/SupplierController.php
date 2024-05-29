<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Supplier;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SupplierController extends Controller
{
   
    public function list()
    {
        $brandlist = DB::table('suppliers')
        ->where('suppliers.status','=','Active')
        ->select('suppliers.brand_name as brandname')
        ->get();
    

        $supplierlist = DB::table('suppliers')
        ->where('suppliers.status','=','Active')
        ->select('suppliers.*')
        ->paginate(5);
        return view('admin.pages.supplier.index',compact('supplierlist', 'brandlist'));
    }

  
    public function register()
    {   
        return view('admin.pages.supplier.add_supplier');
    }

    
    public function registerprocess(Request $request)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'brand_name' => 'required|string|max:255',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'brand_name.required' => 'The brand name field is required.',
            'brand_name.string' => 'The brand name must be a string.',
            'brand_name.max' => 'The brand name may not be greater than 255 characters.',
        ]);

        $supplier = new Supplier();
        $uuid = Str::uuid()->toString();
        $supplier->name = $request->name;
        $supplier->brand_name = $request->brand_name;
        $supplier->uuid = $uuid;
        $supplier->status = 'Active';
        $supplier->save();
        return redirect()->route('SupplierList');
    }

    
    public function listedit(string $id)
    {
        
        $supplierdata = Supplier::find($id);
        return view('admin.pages.supplier.update_supplier',compact('supplierdata'));
    }

   
    public function updateprocess(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'brand_name' => 'required|string|max:255',
        ], [
            'name.required' => 'The name field is required.',
            'name.string' => 'The name must be a string.',
            'name.max' => 'The name may not be greater than 255 characters.',
            'brand_name.required' => 'The brand name field is required.',
            'brand_name.string' => 'The brand name must be a string.',
            'brand_name.max' => 'The brand name may not be greater than 255 characters.',
        ]);
        
        $supplierdata = Supplier::find($request->id);
        $uuid = Str::uuid()->toString();
        $supplierdata->name = $request->name;
        $supplierdata->brand_name = $request->brand_name;
        $supplierdata->uuid = $uuid;
        $supplierdata->update();
        return redirect()->route('SupplierList');
    }

  
    public function destroy(string $id)
    {
        $supplierlist = Supplier::find($id);
        $supplierlist->status = 'Inactive';
        $supplierlist->update();
    
        return redirect()->route('SupplierList');
    }

    public function filter(Request $request){

        
    //   $admin = DB::table('admins')
    //   ->where('admins.status','=','Active')
    //   ->select('admins.name','admins.id')
    //   ->get();

        $suppliername = 'suppliers.name';
        $brandname = 'suppliers.brand_name';
        // dd($request->name);
        $data = [];
        if($request->name != null){
            $data[] = [$suppliername,'LIKE','%'.$request->name.'%'];
        }
        elseif($request->brand_name !=null){
            $data[] = [$brandname,'=',$request->brand_name];
        }
        // dd($data);
        $supplierlist = DB::table('suppliers')
        // ->join('admins','admins.id','=','suppliers.id')
        ->where('suppliers.status','=','Active')
        ->where($data)
        ->select('suppliers.*')
        ->paginate(3);
        $brandlist = DB::table('suppliers')
        ->where('suppliers.status','=','Active')
        ->select('suppliers.brand_name as brandname')
        ->get();
        // $supplierlist = DB::table('suppliers')
        // ->where('suppliers.status','=','Active')
        // ->select('suppliers.*')
        // ->paginate(5);
        
        return view('admin.pages.supplier.index',compact('supplierlist','brandlist'));
        // return redirect()->route('SupplierList');
    }
}
