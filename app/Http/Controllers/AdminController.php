<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\categ;

use DB;

class AdminController extends Controller
{
   //view ADD page
   public function add_categories(){
        return view('admin.catg');
    }
   //listing of items
    public function index(){
        
     $categories = DB::select('select * from category');
     return view('viewitem.catg-view',['categories'=>$categories]);
    }
   //adding category item 
    public function storecategory(Request $request){
        
        $this->validate($request,
        [
        'title'=>'required|min:2|max:20',
        'product'=>'required'
        ]);

        $category = new categ();
        $category->title=$request['title'];
        $category->product=$request['product'];
        
        // $category->save();
        $category->save();
        $request->session()->flash('alert-success', 'Category Successfully Added!');
        return redirect()->back();

    }
    //editing Category item
    public function edit($id)
    {
    $details = DB::table('category')->where('id',  '=', $id)->first();
    return view('edit_category', compact('details'));
    }
    
    //updating edited data
    public function update(Request $request, $id)
    {
      
      DB::table('category')->where('id', '=', $id)->update([
    'title' => $request->title??'',
    'product' => $request->product??''
     ]);
     return redirect()->back()->with('message', 'Updated Successfully');
    
    }

   //deleting item from category
    public function destroy($id) {
        $data =DB::delete('delete from category where id = ?',[$id]);
        if($data){
            return redirect()->back()->with('message', 'Deleted Successfully');
        }

    }
}
