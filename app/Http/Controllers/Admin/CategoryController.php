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
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Приклад валідації для фото
            'short_desc' => 'required|string|max:255',
            'full_desc' => 'required|string|max:1000',
            'show_on_main' => 'int'
        ]);

        $showOnMain = $request->has('show_on_main') ? 1 : 0;

        // Збереження фото
        $photoPath = $request->file('photo')->store('photos/categories'); // Збереження фото у теку storage/app/photos/categories

        // Створення нової категорії
        Category::createCategory([
            'name' => $request->name,
            'photo' => $photoPath, // Збереження шляху до файлу фото у базі даних
            'show_on_main' => $showOnMain,
            'full_desc' => $request->full_desc,
            'short_desc' => $request->short_desc
        ]);

        // Повернення до попередньої сторінки з повідомленням про успішне створення
        return redirect()->back()->with('success', 'Category created successfully.');
    }
}
