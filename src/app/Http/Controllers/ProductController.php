<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view("index", ["products" => $products]);
    }

    public function add()
    {
        return view("add");
    }
}
