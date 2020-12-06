<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index()
    {
        return $this->responseSuccess(Category::all(), 201);
    }

    public function get(Category $category)
    {
        return $this->responseSuccess($category, 201);
    }

    public function store(Category $request)
    {
        $category = Category::create($request->all());

        return $this->responseSuccess($category, 201);
    }

    public function update(Request $request, Category $category)
    {
        $category->update($request->all());

        return $this->responseSuccess($category, 200);
    }

    public function delete(Category $category)
    {
        $category->delete();

        return $this->responseSuccess(null, 204);
    }

    public function responseSuccess($data, $code=200) {
        return response()->json([
            'success' => true,
            'payload' => $data
        ], $code);
    }

    public function responseFail($message) {
        return response()->json([
            'success' => false,
            'error' => $message
        ], 400);
    }
}
