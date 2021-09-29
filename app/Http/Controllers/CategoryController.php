<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tbcategori;
use Illuminate\Support\Facades\DB;
use Session;
class CategoryController extends Controller
{
    //

    public function index(){
    	return view('/admin.add_category');
    }

    public function Allcategorydatashow(){
       $data=Tbcategori::all();
    	return view('admin.all_category',['data'=>$data]);
    }


    public function Save_Category(Request $req){
               $data=new Tbcategori;
             // $data=DB::table('categorys')->insert([
                $data->category_name=$req->category_name;
                $data->category_description=$req->category_description;
                $data->publication_status=$req->publication_status;
                $data->save();
                return redirect('/add_category');








    }
    function Unactive_Category($id)
    {
      DB::table('tbcategoris')
      ->where('id',$id)
      ->update(['publication_status' =>0]);
      return redirect('all_category');
    }



    function active_Category($id)
    {
       DB::table('tbcategoris')
      ->where('id',$id)
      ->update(['publication_status' =>1]);
      return redirect('all_category');
    }

    function edit_Category($id)
    {
         $item=Tbcategori::find($id);
      return view('admin.edit_category',['data'=>$item]);
    }
    function update_Category(Request $req)
    {
           $item=Tbcategori::find($req->id);
           $item->category_name=$req->category_name;
           $item->category_description=$req->category_description;
           $item->save();
           return redirect('all_category');
    }
        public function delete_Category($id)
    {
        $item=Tbcategori::find($id);
        $item->delete();
        Session::get('user','Your data has been deleted Succesfully!');
        return redirect('all_category');
    }


}
