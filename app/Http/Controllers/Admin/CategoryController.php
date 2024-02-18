<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        // Валідація даних з форми
        $request->validate([
            'name' => 'required|string|max:255',
            // Додайте інші правила валідації за необхідності
        ]);

        // Створення нової категорії
        Category::create([
            'name' => $request->name,
            // Додайте інші поля для збереження
        ]);

        // Повернення до попередньої сторінки з повідомленням про успішне створення
        return redirect()->back()->with('success', 'Category created successfully.');
    }
}
