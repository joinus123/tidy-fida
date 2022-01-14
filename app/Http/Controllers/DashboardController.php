<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;
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

    public function employee_edit($id)
    {   
        // dd($id);
         $employee= User::find($id);
        return view('admin/viewemployee')->with('employee',$employee);
    }

    public function addemployee(Request $request)
    {  
         
        {
            // $request->validate([
            //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // ]);
          
            if($request->hasFile('image')){
                $imageName = time().'.'.$request->image->extension();  
     
                $request->image->move(public_path('images'), $imageName);
            }
              
            $imageName ='student-pro-girl.png';
            
        //   dd($request->all());
                $register_process = ([
                'fullname' => $request->fullname,
                'lastname' => $request->lastname,
                'email' => $request->email, 
                'img' =>   $imageName,
                'phone_number' => $request->phone_number,
                'password' =>Hash::make($request->password),  
                'remember_token'=>Str::random(40),
              
          
            ]);
     User::create($register_process);
     return redirect()->route('user')->with(array('message'=>'Data added Successfully','class'=>'alert alert-success'));
     //return redirect()->route('user')->with('error' ,'Add Employee');
    }
}


     public function update_employee(Request $request)
     
     {
        

         $employee = User::find($request->id);
         if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();  
     
            $request->image->move(public_path('images'), $imageName);
   
            $employee->img=$imageName;
          }
        
         $employee->fullname=$request->fullname;
         $employee->lastname=$request->lastname;
         $employee->email=$request->email;
         $employee->phone_number=$request->phone_number;
         
         
         $employee->save();
         return redirect()->route('user',$request->id)->with(array( 'class' =>'alert alert-info' , 'message' =>'Record Has been update successfully'));

     }

    public function delete($id)
    {
        //dd($id);
        User::where('id',$id)->delete();
        return redirect()->back()->with(array('message'=>'Data Delete Successfully','class'=>'alert alert-danger'));
    }
}