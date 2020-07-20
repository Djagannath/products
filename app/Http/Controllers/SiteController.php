<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;

class SiteController extends Controller
{
    public function index()
    {
        return view('site', [
            'categories' => Category::all(),
            'products' => Product::paginate(50),
        ]);
    }
}