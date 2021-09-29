<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use App\Models\Customer;
use Session;
class checkoutController extends Controller
{
    public function login()
    {
    	return view('pages.loginpage');
    }
    public function customer_registration(Request $req)
    {
    	
     //    $user=new Customer();
    	// $user->customer_name=$req->customer_name;
    	// //$user->customer_email=$req->customer_email;
     //  $user->customer_email=$req->session()->get('user')->id;
     //     $user->password=Hash::make($req->password);
    	// $user->mobile_number=$req->mobile_number;
    	// $user->save();
     //     $req->session()->put('user',$user);
     //     $req->session()->put('user',$user);


    	// return redirect('/checkout');
        $data=array();
        $data['customer_name']=$req->customer_name;
        $data['customer_email']=$req->customer_email;
        $data['password']=Hash::make($req->password);
        $data['mobile_number']=$req->mobile_number;
        $id=DB::table('customers')->insertGetId($data);

         Session::put('id',$id);
         Session::put('customer_name',$req->customer_name);
         return redirect('/checkout');



    }
    public function checkoutpage()
    {
    	return view('pages.checkout');
    }
    public function customer_login(Request $req)
    {
        $customer_email=$req->customer_email;
        $password=Hash::make($req->password);
        $results=DB::table('customers')
        ->where('customer_email',$customer_email)
        ->where('password',$password)
        ->first();

        // echo "<pre>";
        // print_r($results);
        // echo "<pre>";
       // return $req->input();
        if($results)
        {
            return redirect('checkout');
        }
        else
        {
            return redirect();
        }

    }
   public function customer_logout()
    {
        Session::flush();
        return redirect('/');

    }

}
