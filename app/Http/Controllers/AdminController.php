<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
   
     $request->validate([
      'name' => 'required|string|max:255',
      'email' => 'required|max:255',
      'address'=>'required',
      'password'=>'required',
      'phone'=>'required',
      'role'=>'required',
      'image' => 'required|image|max:2048',
    ], 
    [
      'name.required' => 'The name field is required.',
      'name.string' => 'The name must be a string.',
      'name.max' => 'The name may not be greater than 255 characters.',
      'email.required' => 'Email field is required.',
      'email.max' => 'Email may not be greater than 255 characters.',
      'address.required' => 'Address field is required.',
      'password.required' => 'Password field is required.',
      'phone.required' => 'Phone Number is required.',
      // 'phone.regex' => 'Phone Number format is invalid',
      'phone.min' => 'Phone Number must be at least 10',
      'role.required'=>'Position is required.',
      'image.required'=> 'Image is required.',
      'image.image' => 'The file must be an image.',
      // 'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
      'image.max' => 'The image size must not exceed 500 KB.',
     
  ]);
   
     $uuid = Str::uuid()->toString();
     $image= $uuid.'.'.$request->image->extension();
     $request->image->move(public_path('image/admin/products_info'),$image);
     $role_id = $this->getRoleId();
     $admin = new Admin();
     $admin->uuid = $uuid;
     $admin->name = $request->name;
     $admin->email = $request->email;
     $admin->address =$request->address;
    //  $admin->role_id = auth('admin')->user()->role_id;
    //  $admin->role_id = $request->role_id;
     $admin->password = Hash::make($request->password);
     $admin->phone = $request->phone;
     $admin->status = 'Active';
     $admin->image = $image;
    $admin->uuid= $uuid;
    $admin->role_id = $role_id;
     $admin->save();
 
     return redirect()->route('adminlist');

      // dd($incomingFields);
      // return view('admin.pages.staff.add_staff',compact('role'));
    }

    
    public function list(){
      $roles = DB::table('roles')
      ->select('id', 'name')
      ->where('status', '=', 'Active')
      ->get();
      $stafflist = DB::table('admins')
      ->join('roles','roles.id','=','admins.role_id')
      ->where('admins.status','=','Active')
      ->select('admins.*','roles.name as role')
      ->paginate(4);
      // dd($stafflist);
      return view('admin.pages.staff.index',compact('stafflist','roles'));
    }



    public function listedit($id){
      $role = DB::table('roles')
      ->select('id','name')->where('status','=','Active')->get();
      $staffdata = Admin::find($id);
      return view('admin.pages.staff.update_staff',compact('role','staffdata'));
      
    }



    public function updateprocess(Request $request){
      $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|max:255',
        'address'=>'required',
        'password'=>'required|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/|max:255',
        'phone'=>'required|min:10',
        'image' => 'required|image|max:2048',
    ], [
        'name.required' => 'The name field is required.',
        'name.string' => 'The name must be a string.',
        'name.max' => 'The name may not be greater than 255 characters.',
        'email.required' => 'Email field is required.',
        'email.max' => 'Email may not be greater than 255 characters.',
        'address.required' => 'Address field is required.',
        'password.required' => 'Password field is required.',
        'password.regex'=> 'The password must contain at least one uppercase letter, one lowercase letter, and one digit.',
        'password.max' => 'Password may not be greater than 255 characters.',
        'phone.required' => 'Phone Number is required.',
        // 'phone.regex' => 'Phone Number format is invalid',
        'phone.min' => 'Phone Number must be at least 10',
        'image.image' => 'The file must be an image.',
        // 'image.mimes' => 'The image must be a file of type: jpeg, png, jpg, gif, svg.',
        'image.max' => 'The image size must not exceed 500 KB.',
    ]);
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
  public function filter(Request $request){
    $columns = [
      'admins.name' => 'Staff Name',
      'admins.email' => 'Email',
      'admins.address' => 'Address',
      'admins.phone' => 'Phone Number'
  ];

  $query = Admin::query()->where('admins.status', 'Active');
  if (!empty($request->search)) {
      $searchInput = $request->search;
      
      $query->where(function ($subQuery) use ($columns, $searchInput) {
          foreach ($columns as $column => $label) {
              $subQuery->orWhere($column, 'LIKE', '%' . $searchInput . '%');
          }
      });
  }

  elseif (!empty($request->role) && $request->role != 'role') {
      $query->where('role_id', '=', $request->role);
  }

  // $stafflist = $query->join('roles', 'roles.id', '=', 'admins.role_id')
  //                     ->select('admins.*', 'roles.name as rolename')
  //                     ->orderBy('admins.id', 'desc')
  //                     ->paginate(3);

  $stafflist =$query
  ->join('roles','roles.id','=','admins.role_id')
  ->where('admins.status','=','Active')
  ->select('admins.*','roles.name as role')
  ->orderBy('admins.id','desc')
  ->paginate(2);

  $roles = DB::table('roles')
              ->select('id', 'name')
              ->where('status', '=', 'Active')
              ->get();
  return view('admin.pages.staff.index', compact('stafflist','roles'));
  }
}
