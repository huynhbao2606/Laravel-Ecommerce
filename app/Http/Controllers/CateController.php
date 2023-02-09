<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CateController extends Controller
{
    //
    public function addCate(){
        return view("admin.addcate");
    }
    public function listCate(){
        $query = DB::table("category")
            ->select("id","name")
            ->orderBy("name",'ASC')
            ->get();
        return view("admin.listcate")->with('list',$query);
    }
    public function addCatePost(Request $request){
        $ten = $request->post('ten'); //Lay gia tri tu textbox co name la ten
        $mota = $request->post('mota');
        DB::table("category")->insert(['name'=>$ten,'description'=>$mota]);
        return redirect('/list-cate');
    }
}
