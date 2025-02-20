<?php

namespace App\Http\Controllers;

// namespace App\Http\Controllers\ExampleController;


use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function index()
    {
        $title = "hihi";
        $des = "hmmmmm";
        return "Hello, this is the index method!";
    }

    public function index2()
    {
        $title = "hihi";
        $des = "hmmmmm";
        return view('blablabla')->with(['title' => $title], ['des' => $des]);
    }
}
