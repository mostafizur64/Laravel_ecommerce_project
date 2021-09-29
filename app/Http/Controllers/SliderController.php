<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;




class SliderController extends Controller
{
    public function index()
    {
    	return view('admin.add_slider');
    }
    public function Save_Slider(Request $req)
    {
    	  $user=new Slider();
    	$user->publication_status=$req->publication_status;
    	if($req->hasfile('slider_image'))
    	{
    		$file=$req->file('slider_image');
    		$extension=$file->getClientOriginalExtension();
    		$filename=time().'.'.$extension;
    		$file->move('SliderImage/',$filename);
    		$user->slider_image=$filename ;
    	}

    	
  
    	$user->save();
    	return redirect()->back()->with('status','Your data has been added successfully');

    }
    public function All_slider()
    {
    	$data=Slider::all();
    	 return view('admin.all_slider',['data'=>$data]);

    }
    public function Done()
    {
        $data=Slider::all();
       // $data=DB::table('sliders');
         return view('admin.done',['product'=>$data]);

    }
    // public function Layout()
    // {
    //     \ $data=Slider::all();
    //    // $data=DB::table('sliders');
    //      return view('pages.Layout',['data'=>$data]);

    // }

    public function unactive_slider($id)
    {
           DB::table('sliders')
        ->where('id',$id)
        ->update(['publication_status'=>0]);
        return redirect()->back()->with('status','Your slider id is Unactived');
    }
     public function active_slider($id)
    {
           DB::table('sliders')
        ->where('id',$id)
        ->update(['publication_status'=>1]);
        return redirect()->back()->with('status','Your slider id is Unactived');
    }
    public function delete_slider($id)
    {
        $data=Slider::find($id);
        $data->delete();
        return redirect()->back()->with('status','Your slier id is deleted successfully');

    }

}
