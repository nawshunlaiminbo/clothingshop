<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

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
        // $uuid = Str::uuid()->toString();
        // $image = $uuid.'.'.$request->image->extension();
        // $request->image->move(public_path('image/admin'),$image);
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->phone = $request->phone;
        $customer->password = bcrypt($request->password);
        $customer->uuid = 'nullable';
        $customer->status = 'Active';
        $customer->image = 'nullable';
        $customer->save();
        return view('customer.account.login.index');
    
    }
}
