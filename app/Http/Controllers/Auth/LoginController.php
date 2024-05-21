<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function loginprocess(Request $request){
        // dd($request);
        $validateData = $request->validate([
            'email'=>'required',
            'password'=>'required',
        ],[
            'email.required'=>'Email field is required',
            'password.required'=>'Password field is required',
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        $input = $request->all();
        $userdata = array('email'=>$input['email'],'password'=>$input['password']);
        // dd($validateData['password']);
        if($input['usertype']=='admin'){
        
        // dd($userdata);
            if(auth('admin')->attempt($userdata)){
                // dd("reach");
                $user = auth('admin')->user();
                // dd($user);
                // return redirect()->route('AdminDashboard');
                if($user->status == 'Active'){
                    return redirect()->route('AdminDashboard');
                }
                else{
                    Auth::logout();
                    return redirect()->route('AdminLogin')->with('Error','You don\'t have an Admin Access');
                }
            }
            else{
                Auth::logout();
                return redirect()->route('AdminLogin')->with('Error','Wrong Email and Password');
            }
        }
        if($input['usertype']=='customer'){
          
            if(auth('customer')->attempt(($userdata))){
                $user = auth('customer')->user();
                if($user->status == "Active"){
                    return redirect()->route('CustomerHome');
                }
                else{
                    Auth::logout();
                    return redirect()->route('CustomerLogin')->with('error','You don\'t have Customer Account Access!');
                }
            }
            else{
                Auth::logout();
                return redirect()->route('CustomerLogin')->with('error','Wrong email and password.');
            }
        }
        else{
            
            return redirect('CustomerLogin')->with('error','You don\'t have Account Access!');
        }
    }
        public function AdminLogout(){
            Auth::logout();
            Session::flush();
            return redirect()->route('AdminLogin');
        }
        public function CustomerLogout(){
            Auth::logout();
            Session::flush();
            return redirect()->route('CustomerLogin');
        }
     }

