<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
class editCategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        return view('category.edit', compact('category'));
    }
}
