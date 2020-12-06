<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $page = $request->get('page');
        $products = Product::all()->forPage($page || 1, 50);

        return $this->responseSuccess($products, 201);
    }

    public function get(Product $product)
    {
        return $this->responseSuccess($product, 201);
    }

    public function store(Request $request)
    {
        $product = Product::create($request->all());

        return $this->responseSuccess($product->id, 201);
    }

    public function update(Request $request, Product $product)
    {
        $product->update($request->all());

        return $this->responseSuccess($product, 200);
    }

    public function delete(Product $product)
    {
        $product->delete();

        return $this->responseSuccess(null, 204);
    }

    public function responseSuccess($data, $code) {
        return response()->json([
            'success' => true,
            'payload' => $data
        ], $code);
    }
}
