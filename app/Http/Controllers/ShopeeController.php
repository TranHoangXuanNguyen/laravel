<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopeeController extends Controller
{
    public function index(){
        return view('shopPe.content');
    }
}
