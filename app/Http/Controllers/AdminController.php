<?php

namespace App\Http\Controllers;

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
    public function list(){
      $stafflist = DB::table('admins')
      ->join('roles','roles.id','=','admins.role_id')
      ->where('admins.status','=','Active')
      
      ;
      
     
      // dd($stafflist);
      
      return view('admin.pages.staff.index');
    }
}
