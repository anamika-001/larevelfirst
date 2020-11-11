<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Subcateg;


class SubcategController extends Controller
{  
    
    //view ADD page
    public function add_subcategory(){
        $categories=DB::table('category')->select('id', 'title')->get();
        return view('admin.sub-catg',['categories'=>$categories]);
        }
       //listing of items
    public function index(){
       
        $subcategories = DB::select('select * from subcategories');
       
        return view('viewitem.sub-catg-view',['subcategories'=>$subcategories]);
        }

    // adding category item 
    public function storesubcategory(Request $request){
      
        $details = DB::table('category')->select('id', 'title')->get();
        
        $Subcategories = new Subcateg;
        // dd($Subcategories);
         $Subcategories->catg_id= $request->catg_id;
         $Subcategories->subcateg=$request->subcateg;
         $Subcategories->name=$request->name;
         $Subcategories->save();
         $request->session()->flash('alert-success', 'Subcategory Successfully Added!');
        return redirect()->back();

    }
    //editing Category item
    public function edit($id)
    {
    $categories=DB::table('category')->select('id', 'title')->get();
    $details = DB::table('subcategories')->where('id',  '=', $id)->first();
    return view('edit_subcategory', compact('details'),['categories'=>$categories]);
    }
    
    //updating edited data
    public function update(Request $request, $id)

    {
      dd($request->ALL());
      DB::table('subcategories')->where('id', '=', $id)->update([
    'categ_id' => $request->catg_id??'',
    'subcateg' => $request->title??'',
    'name' => $request->product??''
     ]);
     return redirect()->back()->with('message', 'Updated Successfully')->route('view-records-categ');
    
    }


     //  deleting item from category
    public function destroy($id){

        $data =DB::delete('delete from subcategories where id = ?',[$id]);
        if($data){
            return redirect()->back()->with('message', 'Deleted Successfully');
        }


    }









}
