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
        return view('customer.account.login.index');
    
    }



    //newcustomer

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    
}
    


