<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Cart;
use Session;

class CartController extends Controller
{
   public function addtocart(Request $req)
   {

        // $qty=$req->qty;
        // $product_id=$req->product_id;
        // $product_info=DB::table('products')
        // ->where('id',$product_id)
        // ->first();
        // echo "<pre>";
        // print_r($product_info);
        // echo "<pre>";
    if($req->session()->has('user'))
    {
      $cart=new Cart();
      $cart->user_id=$req->session()->get('user')->id;
      $cart->product_id=$req->product_id;
      $cart->quantity=$req->quantity;
      $cart->save();
      return redirect('/');

    }
    else
    {
      return redirect('/');
     
      
    }     
   }
    static function cardItem()
    {
      $userid=Session::get('user')->id;
      return Cart::where('user_id',$userid)->count();

    }
//     public function cartList()
//     {
//        // $userid=Session::get('user')->id;
//        // $products=DB::table('carts')
       
//        //  ->join('products','carts.product_id','=','products.id')
    
     
//        // ->where('products','publication_status',1)
//        // ->get();
//        // return view('pages.product_cartList'.['data'=>$products]);
// }
   public function cartList()
    {
        $userId= Session::get('user')->id;
         $products=DB::table('carts')
       ->join('products','carts.product_id', "=" ,'products.id')
       ->where('carts.user_id',$userId)
       ->select('products.*','carts.id as cart_id')

       
       ->get();
       return view('pages.product_cartList',['cattlist'=>$products]);
    
    

    
}
public function remove($id)
{
  // Cart::update($id,0);not work
  Cart::destroy($id);
  return redirect()->back()->with('success','your id is deleted successfully');


}
public function order()
{
   $userId= Session::get('user')->id;
      $Total=DB::table('carts')
       ->join('products','carts.product_id', "=" ,'products.id')
       ->where('carts.user_id',$userId)
      

       
       ->sum('products.product_price');
         return view('pages.Productorder',['total'=>$Total]);
    
}
    



   
}
