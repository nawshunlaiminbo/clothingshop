<?php

namespace App\Http\Controllers;

use id;
use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CustomerController extends Controller
{
    //
    public function home(){
        return view ('customer.index');
    }
    public function login(){
        return view ('customer.account.login.index');
    }
 
    public function register(){
        return view('customer.account.signup.index');
    }
    public function registerprocess(request $request){
        $customer = new Customer();
        $uuid = Str::uuid()->toString();
        $image = $uuid.'.'.$request->image->extension();
        $request->image->move(public_path('image/admin'),$image);
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->phone = $request->phone;
        $customer->password = bcrypt($request->password);
        $customer->uuid = $uuid;
        $customer->status = 'Active';
        $customer->address = $request->address;
        $customer->image = $image;
        $customer->save();
        return view('customer.account.login.index');
    
    }
    public function list(){
        $customerlist = DB::table('customers')->where('status','=','Active')->get();
        // dd($customerlist);
        return view('admin.pages.customer.index',compact('customerlist'));
    }
    public function listedit($id){
        $customerdata= Customer::find($id);
        // dd($customerdata);
        return view('admin.pages.customer.edit_customer',compact('customerdata'));
    }
    public function updateprocess(Request $request){
        // dd("reach here");
        // $request->validate([
        //     'fname' => 'required',
        //     'lname'=>'required',
        //     'email' => 'required',
        //     'password'=>'required',
        //     'phone'=>'required',
        // ]);
        // dd(bcrypt($request->password));
        $customerlist = Customer::all();
        $customerdata = Customer::find($request->id);
        // dd($request->all());
        $customerdata->firstname =$request->fname;
        $customerdata->lastname =$request->lname;
        $customerdata->email =$request->email;
        $customerdata->password =bcrypt($request->password);
        $customerdata->phone =$request->phone;
        $customerdata->address = $request->address;
        if ($request->hasFile('image')) {
            if ($customerdata->image) {
                Storage::delete($customerdata->image);
            }
            $path = $request->file('image')->store(public_path('image/admin'));
            $customerdata->image = $path;
        }
        $customerdata->update();
        
        return view ('admin.pages.customer.index',compact('customerlist'))->with('success', 'Updated successfully.');
    
    }
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
    


