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
        // $productlist = DB::table('products')
        //         ->join('categories','categories.id','=','products.category_id')
        //         ->where('products.status','=','Active')
        //         ->where('products.category_id','=',$id)
        //         ->select('products.*','categories.name as categoryname')
        //         ->get();
        //         $productid = $id;
        $newarrival = DB::table('products')
        ->where('products.status','=','Active')
        // ->where('products.id')
        // ->select('products*')
        ->orderBy('products.id','desc')
        ->get();
        // dd($newarrival);
        // return redirect()->route('CustomerHome',compact('newarrival'));
        return view('customer.index',compact('newarrival'));
    }
    public function login(){
        return view ('customer.account.login.index');
    }
 
    public function register(){
        return view('customer.account.signup.index');
    }
    public function registerprocess(request $request){
        $request->validate(
            [
                'firstname' => 'required|string|max:255',
                'lastname' => 'required|string|max:255',
                'email' => 'required|max:255',
                'address' => 'required',
                'state' => 'required',
                'zipcode' => 'required',
                'date_of_birth' => 'required',
                'phone' => 'required',
                'password' =>'required',
                'image' => 'required',
            ],
            [
                'firstname.required' => 'The name field is required.',
                'firstname.string' => 'The name must be a string.',
                'firstname.max' => 'The name may not be greater than 255 characters.',
                'lastname.required' => 'The name field is required.',
                'lastname.string' => 'The name must be a string.',
                'lastname.max' => 'The name may not be greater than 255 characters.',
                'email.required' => 'Email field is required.',
                'email.max' => 'Email may not be greater than 255 characters.',
                'address.required' => 'Address field is required.',
                'state.required' => 'State field is required.',
                'zipcode.required' => 'Zipcode is required.',
                'date_of_birth.required' => 'Date of birth is required.',
                'password.required' => 'Password field is required.',
                // 'password.regex'=> 'The password must contain at least one uppercase letter, one lowercase letter, and one digit.',
                // 'password.max' => 'Password may not be greater than 255 characters.',
                'phone.required' => 'Phone Number is required.',
                // 'phone.regex' => 'Phone Number format is invalid',
                'phone.min' => 'Phone Number must be at least 10',
                'image.image' => 'The file must be an image.',
                // 'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
                // 'image.max' => 'The image size must not exceed 500 KB.',
            ]);
        $customer = new Customer();
        $uuid = Str::uuid()->toString();
        $image = $uuid.'.'.$request->image->extension();
        $request->image->move(public_path('image/admin'),$image);
        $customer->firstname = $request->firstname;
        $customer->lastname = $request->lastname;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->state = $request->state;
        $customer->zipcode = $request->zipcode;
        $customer->date_of_birth = $request->date_of_birth;
        $customer->phone = $request->phone;
        $customer->password = bcrypt($request->password);
        $customer->uuid = $uuid;
        $customer->status = 'Active';
        $customer->address = $request->address;
        $customer->image = $image;
        $customer->save();
        return redirect()->route('CustomerLogin');
    
    }

    public function success(){
        return view('customer.success');
    }

    // public function slider(){
    //     return view('customer.slider');
    // }
    public function contact(){
        return view ('customer.pages.contact.index');
    }

}