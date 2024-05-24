<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCustomerController extends Controller
{
    public function list(){
        $customerlist = DB::table('customers')->where('status','=','Active')
        ->paginate(2);
        // dd($customerlist);
        return view('admin.pages.customer.index',compact('customerlist'));
    }
    public function listedit($id){
        $customerdata= Customer::find($id);
        // dd($customerdata);
        return view('admin.pages.customer.edit_customer',compact('customerdata'));
    }
    // public function updateprocess(Request $request){
    //     // dd("reach here");
    //     // $request->validate([
    //     //     'fname' => 'required',
    //     //     'lname'=>'required',
    //     //     'email' => 'required',
    //     //     'password'=>'required',
    //     //     'phone'=>'required',
    //     // ]);
    //     // dd(bcrypt($request->password));
    //     $customerlist = Customer::all();
    //     $customerdata = Customer::find($request->id);
    //     // dd($request->all());
    //     $customerdata->firstname =$request->fname;
    //     $customerdata->lastname =$request->lname;
    //     $customerdata->email =$request->email;
    //     $customerdata->password =bcrypt($request->password);
    //     $customerdata->phone =$request->phone;
    //     $customerdata->address = $request->address;
    //     $customerdata->update();
        
    //     return view ('admin.pages.customer.index',compact('customerlist'))->with('success', 'Updated successfully.');
    
    // }
    public function destroy($id)
    {

        $customerlist = Customer::find($id);
        $customerlist->status = 'Inactive';
        $customerlist->update();
    //  DB::table('customers')->where('id',$id)->delete();
    //  return view('admin.pages.customer.index',compact('customerlist'));
        return redirect()->route('CustomerList')->with('success', 'Record deleted successfully');
    }
}
