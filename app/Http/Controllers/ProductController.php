<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $coffee = Product::where('category', 'coffee')->get();

        $noncoffee = Product::where('category', 'noncoffee')->get();

        $maincourse = Product::where('category', 'maincourse')->get();

        $snack = Product::where('category', 'snack')->get();

        return view('menu', compact(
            'coffee',
            'noncoffee',
            'maincourse',
            'snack'
        ));
    }
}
