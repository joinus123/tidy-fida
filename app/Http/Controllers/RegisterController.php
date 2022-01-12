<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

   
      //  dd($request->all());
       $register_process = ([
        'fullname' => $request->fullname,
        'lastname' => $request->lastname,
        'email' => $request->email, 
        'phone_number' => $request->phone_number,
        'password' =>Hash::make($request->password),  
        'remember_token'=>Str::random(40),
     ]);
     User::create($register_process);
     return redirect()->back()->with('message','Register Succesfully');
   }
   

}
