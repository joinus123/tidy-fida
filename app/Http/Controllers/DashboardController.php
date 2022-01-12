<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DashboardController extends Controller
{
       public function dashboard()
    {
        return view('admin/dashboard');
    }
    public function user()
    {   $user=User::all()->toArray();
        return view('admin/user',compact('user'));
    }

    public function view_employeeform()
    {   
        return view('admin/employeeform');
    }
    public function addemployee(Request $request)
    {  
         
        {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
          
           
          $imageName = time().'.'.$request->image->extension();  
     
            $request->image->move(public_path('images'), $imageName);
      
            
        //   dd($request->all());
                $register_process = ([
                'fullname' => $request->fullname,
                'lastname' => $request->lastname,
                'email' => $request->email, 
                'img' =>  $imageName,
                'phone_number' => $request->phone_number,
                'password' =>Hash::make($request->password),  
                'remember_token'=>Str::random(40),
              
          
            ]);
     User::create($register_process);
     return redirect()->route('user')->with('message','Data added Successfully');
     //return redirect()->route('user')->with('error' ,'Add Employee');
    }
}

    public function delete($id)
    {
        $model=User::where('id',$id)->delete();
        return redirect()->back();
    }
}