<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Models\User;


class RegisterController extends Controller
{
   public function view_register()
   {  
    
       return view('register');
   }

   public function register_process(Request  $request)
   {
      
      $validatedData = $request->validate([

         'fullname' => 'required|string|max:255',
         'lastname' => 'required|string|max:20|unique:users',
         'phone_number' => 'required|string|max:11',
         'email' => 'required|string|email|max:255|unique:users',
         'password' => 'required|string|min:6',
     ]);
       
        
         
   
   
      //  dd($request->all());
       $register_process = ([
        'fullname' => $request->fullname,
        'lastname' => $request->lastname,
        'email' => $request->email, 
        'phone_number' => $request->phone_number,
        'password' =>Hash::make($request->password),  
        'remember_token'=>Str::random(40),
     ]);
     User::create($register_process, $validatedData);
     return redirect()->route('view-login')->with('message','Register Succesfully');
   }
   

}
