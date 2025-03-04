<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    // get list
    public function index()
    {
        return response()->json(Product::all(), 200);
    }

    // add
    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    // get by id
    public function show($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Không tìm thấy sản phẩm'], 404);
        }
        return response()->json($product, 200);
    }

    // update
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Không tìm thấy sản phẩm'], 404);
        }
        $product->update($request->all());
        return response()->json($product, 200);
    }

    // delete
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return response()->json(['message' => 'Không tìm thấy sản phẩm'], 404);
        }
        $product->delete();
        return response()->json(['message' => 'Đã xóa sản phẩm'], 200);
    }
}
