<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manufactur;
use Illuminate\Support\Facades\DB;

class manufactureController extends Controller
{
    public function index()
    {
    	return view('admin.add_manufacture');

    }
   public function Save_manufacture( Request $req)
    {
    	        $data=new Manufactur;
             // $data=DB::table('categorys')->insert([
                $data->manufacture_name=$req->manufacture_name;
                $data->manufacture_description=$req->manufacture_description;
                $data->publication_status=$req->publication_status;
                $data->save();
                return redirect('/add_manufacture');
    }
    function All_manufacture()
    {
        $data=Manufactur::all();
        return view('admin.all_manufacture',['data'=>$data]);
    }
    function unactive_manufacture($id)
    {
        DB::table('manufacturs')
        ->where('id',$id)
        ->update(['publication_status'=>0]);
        return redirect()->back()->with('status','Your Manufactur id is Unactived');
    }
     function active_manufacture($id)
    {
        DB::table('manufacturs')
        ->where('id',$id)
        ->update(['publication_status'=>1]);
        return redirect()->back()->with('status','Your Manufactur id is Actived');
    }






   public function delete_manufacture($id)
    {
        $data=Manufactur::find($id);
        $data->delete();
        return redirect()->back()->with('status','Your Manufactur id is Deleted');
    }
}
