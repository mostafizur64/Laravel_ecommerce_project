<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Test;
use Illuminate\Support\Facades\DB;
use Session;

class productController extends Controller
{
    function index()
    {
    	return view('admin.add_product');
    }
    // function Save_product(Request $req)
    // {
    // 	$user=new Product();
    // 	$user->product_name=$req->product_name;
    // 	$user->category_id=$req->category_id;
    // 	$user->manufacture_id=$req->manufacture_id;
    // 	$user->product_short_description=$req->product_short_description;
    // 	$user->product_long_description=$req->product_long_description;
    // 	$user->product_price=$req->product_price;

    // 	$user->product_size=$req->product_size;
    // 	$user->product_color=$req->product_color;
    // 	$user->publication_status=$req->publication_status;
    // 	if($req->hasfile('profile_image'))
    // 	{
    // 		$file=$req->file('profile_image');
    // 		$extension=$file->getClientOriginalExtension();
    // 		$filename=time().'.'.$extension;
    // 		$file->move('upload/StudentPic/',$filename);
    // 		$user->profile_image=$filename ;
    // 	}
    // 	$user->save();
    // 	return redirect('add_product');

    // }
    function Save_test(Request $req)
    {

          $user=new Product();
    	// $user->name=$req->name;
    	// $user->email=$req->email;
    	$user->product_name=$req->product_name;
    	$user->category_id=$req->category_id;
    	$user->manufacture_id=$req->manufacture_id;
    	$user->product_short_description=$req->product_short_description;
    	$user->product_long_description=$req->product_long_description;
    	$user->product_price=$req->product_price;

    	$user->product_size=$req->product_size;
    	$user->product_color=$req->product_color;
    	$user->publication_status=$req->publication_status;
   if($req->hasfile('product_image'))
    	{
    		$file=$req->file('product_image');
    		$extension=$file->getClientOriginalExtension();
    		$filename=time().'.'.$extension;
    		$file->move('upload/StudentPic/',$filename);
    		$user->product_image=$filename ;
    	}



    	$user->save();
    	return redirect()->back()->with('status','Your data has been added successfully');


    }

    function All_product()

    {
    	$data=DB::table('products')
        ->join('tbcategoris','products.category_id','=','tbcategoris.id')
        ->join('manufacturs','products.manufacture_id','=','manufacturs.id')
        ->select('products.*','tbcategoris.category_name','manufacturs.manufacture_name')
        ->get();
       return view('admin.all_product',['data'=>$data]);
    }
    function unactive_product($id)
    {
       // DB::table('products')
       // ->where('id',$id)
       // ->update(['publication_status' =>0]);
       // return redirect()->back()->with('status','Your product id unactived successfully');
         DB::table('products')
        ->where('id',$id)
        ->update(['publication_status'=>0]);
        return redirect()->back()->with('status','Your Manufactur id is Unactived');
    }
     function active_Category($id)
     {
        DB::table('products')
        ->where('id',$id)
        ->update(['publication_status'=>1]);
       return redirect()->back()->with('status','Your product id actived successfully');
     }
     function delete_product($id)
     {
        $item=Product::find($id);
        $item->delete();
        return redirect()->back()->with('status','Your product id delete successfully');
     }
     function EditProduct($id)
     {
        $data=Product::find($id);
        return view('admin.edit_product',['data'=>$data]);
     }


}
