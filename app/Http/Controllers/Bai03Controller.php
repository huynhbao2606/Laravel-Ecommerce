<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Bai03Controller extends Controller
{
    public function tuyensinh(){
        return view("TuyenSinh.V_TuyenSinh");
    }
    public function xulytuyensinh(Request $request){
        $toan = $request -> post('toan');
        $ly = $request -> post('ly');
        $hoa = $request -> post('hoa');
        $kv = $request -> post('kv');
        return view('TuyenSinh.V_TuyenSinh') -> with(['toan'=>$toan,'ly'=>$ly,'hoa'=>$hoa,'kv'=>$kv]);
    }
}
