<?php

namespace App\Http\Controllers;

use App\Models\Admin;
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
      // dd($role ,);
      return view('admin.pages.staff.add_staff',compact('role'));
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
