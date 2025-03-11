<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index(){
        $slide = Slide::all();
        return view('pages.index', ['slide' => $slide]);
    }
}
