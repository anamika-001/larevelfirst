<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Subcateg;


class SubcategController extends Controller
{  
    
    
    public function add_subcategory(){
        $categories=DB::table('category')->select('id', 'title')->get();
        return view('admin.sub-catg',['categories'=>$categories]);
        }

    public function index(){
       
        $subcategories = DB::select('select * from subcategories');
       
        return view('viewitem.sub-catg-view',['subcategories'=>$subcategories]);
        }

   
    public function storesubcategory(Request $request){
      
        $details = DB::table('category')->select('id', 'title')->get();
        
        $Subcategories = new Subcateg;
        // dd($Subcategories);
        $Subcategories->catg_id= $request->catg_id;
         dd( $Subcategories->catg_id);
         $Subcategories->subcateg=$request->subcateg;
         $Subcategories->name=$request->name;
         $Subcategories->save();
        return redirect('/admin');

    }
    public function destroy($id){

        $data =DB::delete('delete from subcategories where id = ?',[$id]);
        if($data){
            
            return redirect()->back()->withErrors(['success' => 'SubCategory deleted successfully.']);
        }


    }









}
