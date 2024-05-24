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
        $supplierlist = DB::table('suppliers')
        ->where('suppliers.status','=','Active')
        ->select('suppliers.*')
        ->paginate(2);
        return view('admin.pages.supplier.index',compact('supplierlist'));
    }

  
    public function register()
    {   
        return view('admin.pages.supplier.add_supplier');
    }

    
    public function registerprocess(Request $request)
    {
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
}
