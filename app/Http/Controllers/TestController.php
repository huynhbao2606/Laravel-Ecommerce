<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function sum($a,$b){
        $sum = $a + $b;
        return view("TinhTong.V_Tong",['tong' => $sum]);
    }
}
