<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'description' => 'nullable',
        ]);

        Category::create($request->all());
        return redirect()->route('categories.index')->with('success', 'Category created successfully');
    }

    public function show($id)
    {
        $category = Category::find($id);
        if (is_null($category)) {
            return redirect()->route('categories.index')->with('error', 'Category not found');
        }
        return view('categories.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::find($id);
        if (is_null($category)) {
            return redirect()->route('categories.index')->with('error', 'Category not found');
        }
        return view('categories.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if (is_null($category)) {
            return redirect()->route('categories.index')->with('error', 'Category not found');
        }

        $request->validate([
            'name' => 'required|max:50',
            'description' => 'nullable',
        ]);

        $category->update($request->all());
        return redirect()->route('categories.index')->with('success', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        if (is_null($category)) {
            return redirect()->route('categories.index')->with('error', 'Category not found');
        }

        $category->delete();
        return redirect()->route('categories.index')->with('success', 'Category deleted successfully');
    }
}
