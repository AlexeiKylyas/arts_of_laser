<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'photo', 'short_desc', 'full_desc', 'show_on_main'];
    // Метод для збереження нової категорії
    public static function createCategory($data)
    {
        return self::create($data);
    }

    // Метод для оновлення існуючої категорії
    public function updateCategory($data)
    {
        return $this->update($data);
    }

    // Метод для видалення категорії
    public function deleteCategory()
    {
        return $this->delete();
    }
}
