<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json([
            'message' => 'Success',
            'data' => $products
        ]);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response()->json([
            'message' => 'Success',
            'data' => $product
        ]);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());
        return response()->json([
            'message' => 'Data berhasil disimpan',
            'data' => $product
        ]);
    }

    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        return response()->json([
            'message' => 'Data berhasil diupdate',
            'data' => $product
        ]);
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return response()->json([
            'message' => 'Data berhasil dihapus',
            'data' => null
        ]);
    }
}
