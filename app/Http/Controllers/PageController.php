<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Models\Product;
use Illuminate\Http\Request;


class PageController extends Controller
{
    public function index(){
        $slide = Slide::all();
        $products = Product::where('id_type', 6)->limit(4)->get();
        $product2 = Product::where('id_type', 5)->limit(4)->get();
        $product3 = Product::where('id_type', 4)->limit(4)->get();
        return view('pages.trangchu', compact('slide', 'products', 'product2', 'product3'));
    }
}
