<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('layout.admin.category.index', compact('categories'));
    }

    public function create()
    {
   
        return view('layout.admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'nullable|string'
        ]);

        $data = $request->all();
        // Tạo slug từ name
        $data['slug'] = Str::slug($data['name']);

        // Tạo category với slug đã được tạo
        Category::create($data);

        return redirect()->route('category')->with('success', 'Category created successfully.');
    }
    public function show(Category $category)
    {
        $categories = Category::all();
        return view('admin.category.show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('layout.admin.category.edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'nullable'
        ]);
        $category = Category::findOrFail($id);
        $category->name = $request->name;
        $category->description = $request->description;
        $category -> save();
        

        return redirect()->route('category')->with('success', 'Sửa loại sản phẩm thành công.');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('category')->with('success', 'Xóa sản phẩm thành công.');
    }
}
