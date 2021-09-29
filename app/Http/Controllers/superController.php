<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use sent;

class superController extends Controller
{
    public function logout()
    {
    	// session::put('admin_name',null);
    	// session::put('admin_id',null);
    	Session::flush();
    	return redirect('admin');
    }
     function show_admin()
    {
    	//$this->adminAuthcheck();
    	//return 'doen';
    	return view('admin.dashboard');
    }
    // public function adminAuthcheck(){
    // 	$admin_id=Session::get('admin_id');
    // 	if ($admin_id) {
    // 		return;
    // 	}
    // 	else{
    // 		return redirect('admin')->sent();
    // 	}
    // }
}
