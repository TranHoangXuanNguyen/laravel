<?php

namespace App\Http\Controllers;

// namespace App\Http\Controllers\ExampleController;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

//use League\Uri\Http;

class TestApiController extends Controller
{
    public function index()
    {
       $res = Http::get('https://jsonplaceholder.typicode.com/posts');
       $data = $res -> json();
        return view('api')->with('data',$data);
    }
}
