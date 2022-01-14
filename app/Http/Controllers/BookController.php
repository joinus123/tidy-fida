<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    public function list_book()
    {   
        $data=Book::all()->toArray();
        return view('admin/books/list',compact('data'));
    }

    public function viewform_book()
    {
        return view('admin/books/add');
    }

    public function add_book(Request $request)
    {

        // dd($request->all());
       
            if($request->hasfile('image')){
            $imageName = time().'.'.$request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $book_record = [
                'title' => $request->title,
                'author' => $request->author,
                'price' => $request->price,
                'image' => $imageName,
                'publishdate' => $request->publishdate,
            ];
            }else{
                $imageName ='student-pro-girl.png';
                $book_record = [
                    'title' => $request->title,
                    'author' => $request->author,
                    'price' => $request->price,
                    'image' => $imageName,
                    'publishdate' => $request->publishdate,
                ];
            }
            // dd($request->all());

            
       
                
        Book::create($book_record);
        return redirect()->route('list-book')->with(array('message'=>'Data Insert Successfully', 'class'=>'alert alert-success'));
    }


    public function book_edit($id)
    {
       
        $views=Book::find($id);
        return view('admin/books/edit',compact('views'));
    }


    public function update_book(Request $request)
     
    {
       

        $data = Book::find($request->id);
        if($request->hasFile('image')){
           $imageName = time().'.'.$request->image->extension();  
    
           $request->image->move(public_path('images'), $imageName);
  
           $data->image=$imageName;
         }
       
        $data->title=$request->title;
        $data->author=$request->author;
        $data->price=$request->price;
        
        
        
        $data->save();
        return redirect()->route('list-book',$request->id)->with(array( 'class' =>'alert alert-info' , 'message' =>'Record Has been update successfully'));

    }




    public function delete($id)
    {
        //dd($id);
        Book::where('id',$id)->delete();
        return redirect()->back()->with(array('message'=>'Data Delete Successfully','class'=>'alert alert-danger'));
    }
}
