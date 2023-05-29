<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use PhpParser\Node\Stmt\Echo_;

class CategoriesController extends Controller
{    public function index() {
        $categories = Category::All();
        return view('welcome', ['categories' => $categories]);
    }

    public function create(request $request) {

        $newCategory = new Category();

        $newCategory->name = $request->name;
        $newCategory->save();

        return redirect()->back();

    }
}
