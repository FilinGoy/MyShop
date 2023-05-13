<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\General\StoreRequest;
use App\Http\Requests\General\UpdateRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function store(StoreRequest $request)
    {
        $data = $request->validated();
        Category::firstOrCreate($data);

        return redirect()->back();
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function show(Category $category)
    {
        return view('admin.category.show', compact('category'));
    }

    public function update(UpdateRequest $request, Category $category)
    {
        $data = $request->validated();
        $category->update($data);

        return view('admin.category.show', compact($category));
    }

    public function delete(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index');
    }
}
