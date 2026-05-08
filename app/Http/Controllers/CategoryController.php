<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return response()->json([
            'status' => true,
            'message' => 'Categories retrieved successfully',
            'data' => Category::latest()->get()
        ], 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100|unique:categories,name',
            'description' => 'nullable|string',
            'is_active' => 'boolean'
        ]);

        $category = Category::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Category created successfully',
            'data' => $category
        ], 201);
    }

    public function show(Category $category)
    {
        return response()->json([
            'status' => true,
            'message' => 'Category retrieved successfully',
            'data' => $category
        ], 200);
    }

    public function update(Request $request, Category $category)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100|unique:categories,name,' . $category->id,
            'description' => 'nullable|string',
            'is_active' => 'boolean'
        ]);

        $category->update($validated);

        return response()->json([
            'status' => true,
            'message' => 'Category updated successfully',
            'data' => $category
        ], 200);
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return response()->json([
            'status' => true,
            'message' => 'Category deleted successfully'
        ], 200);
    }
}