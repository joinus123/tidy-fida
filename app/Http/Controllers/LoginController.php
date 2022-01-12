<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Validation\Validates\Requests;

class LoginController extends Controller
{
    public function view_login()
    {
        return view('login');
    }
     
    public function login_process(Request $request){
       
        $rules = array(
            'email' => 'required|email', // make sure the email is an actual email
            'password' => 'required'
            // password has to be greater than 3 characters and can only be alphanumeric and);
            // checking all field
        );


            $validator = Validator::make($request->all() , $rules);
            // if the validator fails, redirect back to the form
            if (!$validator->fails()){
                
                $admin =   User::where('email', '=', $request->input('email'))->first();
             
            if($admin){
                if(Hash::check($request->input('password'),$admin->password))
                {
                    session(['admin_id' => $admin['id']]);
                    session(['email' => $admin['email']]);
                    session(['fullname' => $admin['fullname']]);
                  
                    return redirect('dashboard')->with(['message'=>'Login Successfully']);
                
                }else{
                    
                    return redirect('login')->with(['error'=>'Invalid Password']);
                }
            }else{
              
                return redirect('login')->with(['error'=>'Invalid Email']);
            }
            }
    } 
         public function logout()
         {
             Auth::logout();
             return redirect()->route('view-login');
         } 
}

