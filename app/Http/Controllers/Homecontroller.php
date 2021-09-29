<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use \App\Models\Product;

class Homecontroller extends Controller
{
    function index()
    {
    	//return view('pages.Home_content');
    	$data=DB::table('products')
        ->join('tbcategoris','products.category_id','=','tbcategoris.id')
        ->join('manufacturs','products.manufacture_id','=','manufacturs.id')
        ->select('products.*','tbcategoris.category_name','manufacturs.manufacture_name')
        ->limit(9)
        ->get();
       return view('pages.Home_content',['data'=>$data]);
    	
   }
   public function Category_by_product($id)
   {
    $data=DB::table('products')
        ->join('tbcategoris','products.category_id','=','tbcategoris.id')
        ->select('products.*','tbcategoris.category_name')
        ->where('tbcategoris.id',$id)
        ->where('tbcategoris.publication_status',1)
        ->limit(18)
        ->get();
       return view('pages.show_by_category_product',['data'=>$data]);
      
   }
  public function  manufacture_by_product($id)
  {
    $data=DB::table('products')
        ->join('tbcategoris','products.category_id','=','tbcategoris.id')
        ->join('manufacturs','products.manufacture_id','=','manufacturs.id')
        ->select('products.*','tbcategoris.category_name','manufacturs.manufacture_name')
        ->where('manufacturs.id',$id)
        ->where('tbcategoris.publication_status',1)
        ->limit(9)
        ->get();
       return view('pages.show_by_manufacture_product',['data'=>$data]);
        
  }


  public function Product_details($id)
  {
   
    $data=Product::find($id);
    // $data=DB::table('products')
    //     ->join('tbcategoris','products.category_id','=','tbcategoris.id')
    //     ->join('manufacturs','products.manufacture_id','=','manufacturs.id')
    //     ->select('products.*','tbcategoris.category_name')
    //     ->where('products.id',$id)
    //     ->where('products.publication_status',1)
    //     ->first();
        
       return view('pages.show_product_details',['data'=>$data]);
      
  }
}
