<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\tb1_admin;



class adminController extends Controller
{
    //
    function index()
    {
    	return view('admin_login');
    }
   
    function dashboard(Request $req)
    {
    	   $user=DB::table('tb1_admin')->where(['admin_email'=> $req->admin_email])->first();
      if(!$user || !Hash::check($req->admin_password,$user->admin_password))
      {
        return ' <div class="alert alert-danger">Email $$ password are not matched</div>';
      }
      else
      {
       $req->session()->put('user',$user);
        return redirect('dashboard');
      }
    }
    
}
