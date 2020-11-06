<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categ;
use DB;

class AdminController extends Controller
{

   public function create(){
        
        return view('admin.catg');
    }

    public function index(){
    //    dd("test");
        $categories = DB::select('select * from category');
        
     return view('viewitem.catg-view',['categories'=>$categories]);
    }

    public function storecategory(Request $request){
        $this->validate($request,
        [
        'title'=>'required',
        'product'=>'required'
        ]);



        
        $category = new categ();
        $category->title=request('title');
        $category->product=request('product');
        
        dd($category->save());
        return redirect('/admin');

    }

    
}
