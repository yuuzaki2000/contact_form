<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function store(Request $request){
        $category = $request->only(['content']);
        Category::create($category);
        return redirect('/categories');
    }
}
