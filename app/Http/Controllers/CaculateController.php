<?php

namespace App\Http\Controllers;

// namespace App\Http\Controllers\ExampleController;


use Illuminate\Http\Request;

class CaculateController extends Controller
{
    public function caculate(Request $req)
    {
        $sum = $req->num1 + $req->num2;
        return view('caculate')->with('sum',$sum);
    }
}
