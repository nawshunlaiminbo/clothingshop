<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function login(){
        return view('admin.account.login.index');
    }
    public function dashboard(){
      return view('admin.index');
    }
    public function register(){
      $role = DB::table('roles')
      ->select('id','name')->where('status','=','Active')->get();
      return view('admin.pages.staff.add_staff',compact('role'));
    }
    public function registerprocess(Request $request){
    //  $incomingFields = $request->validate([
    //   'name'=>['required','min:3', 'max:20'],
    //   'email'=>['required','email'],
    //   'address'=>['required','address'],
    //   'password'=>['required','min:6','max:50'],
    //   'phone'=>['required','min:9','max:11']
    //  ]);
    //  $roleid  = $request->role;
     $uuid = Str::uuid()->toString();
    //  $request->image->move(public_path('image/admin'));
     $admin = new Admin();
     $admin->name = $request->name;
     $admin->email = $request->email;
     $admin->address = $request->address;
     $admin->password = bcrypt($request->password);
     $admin->phone = $request->phone;
     $admin->status = 'Active';
    //  $admin->uuid = $uuid.'.'.$request->image->extension();
    $admin->uuid= 'nullable';
    // 
    $admin->role_id = $request->role_id;
     $admin->save();
     return $admin;


     
      // dd($incomingFields);
      // return view('admin.pages.staff.add_staff',compact('role'));
    }
    public function list(){
      $stafflist = DB::table('admins')
      ->join('roles','roles.id','=','admins.role_id')
      ->where('admins.status','=','Active')
      ->select('admins.*','roles.name as role')
      ->get();
      // dd($stafflist);
      return view('admin.pages.staff.index',compact('stafflist'));
    }
    public function listedit($id){
      // dd($id);
      $role = DB::table('roles')
      ->select('id','name')->where('status','=','Active')->get();
      $staffdata = Admin::find($id);
      return view('admin.pages.staff.update_staff',compact('role','staffdata'));
      
    }
  
}
