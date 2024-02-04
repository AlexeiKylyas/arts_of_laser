<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Service;

class HomeController extends Controller
{
    public function getDataForHomePage(){
        $services = Service::all();
        $categories = Category::where('show_on_main', 1)->get();
        return view('home', compact('services', 'categories'));
    }
}
