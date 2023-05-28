<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesController extends Controller
{    public function index() {
        $categories = Category::All();
        return view('welcome', ['categories' => $categories]);
    }
}
