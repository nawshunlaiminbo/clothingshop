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
      // dd("reach");
      return view('admin.index');
    }
    public function register(){
      $role = DB::table('roles')
      ->select('id','name')->where('status','=','Active')->get();
      return view('admin.pages.staff.add_staff',compact('role'));
    }
    public function registerprocess(Request $request){
     $validateData = $request->validate([
      'name'=>['required','min:3', 'max:20'],
      'email'=>['required','email'],
      'address'=>['required','address'],
      'password'=>['required','min:6','max:50'],
      'phone'=>['required','min:9','max:11']
     ]);
    //  $roleid  = $request->role;
    // dd($request->image);
   
     $uuid = Str::uuid()->toString();
     $image= $uuid.'.'.$request->image->extension();
     $request->image->move(public_path('image/admin'));
     $role_id = $this->getRoleId();
     $admin = new Admin();
     $admin->uuid = $uuid;
     $admin->name = $validateData['name'];
     $admin->email = $validateData['email'];
     $admin->address = $validateData['address'];
    //  $admin->role_id = auth('admin')->user()->role_id;
    //  $admin->role_id = $request->role_id;
     $admin->password = $validateData[bcrypt('password')];
     $admin->phone = $validateData['phone'];
     $admin->status = 'Active';
     $admin->image = $image;
    // $admin->uuid= 'nullable';
    $admin->role_id = $role_id;
     $admin->save();
     return redirect()->route('adminlist');


     
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
      $role = DB::table('roles')
      ->select('id','name')->where('status','=','Active')->get();
      $staffdata = Admin::find($id);
      return view('admin.pages.staff.update_staff',compact('role','staffdata'));
      
    }
    public function updateprocess(Request $request){
      // $stafflist = Admin::all();
      $staffdata = Admin::find($request->id);
      $uuid = Str::uuid()->toString();
      $staffdata->name = $request->name;
      $staffdata->email = $request->email;
      $staffdata->address = $request->address;
      $staffdata->password = bcrypt($request->password);
      $staffdata->phone = $request->phone;
      $staffdata->uuid = $uuid;
      // $staffdata->status = 'Active';
      $staffdata->update();
      return redirect()->route('adminlist')->with('success', 'Record updated successfully');
    }
  public function destroy($id){
    $stafflist = Admin::find($id);
    $stafflist->status = 'Inactive';
    $stafflist->update();

    return redirect()->route('adminlist')->with('Success','Record deleted successfully');
  }
  private function getRoleId(){
    return 2;
  }
}
