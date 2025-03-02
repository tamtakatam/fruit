<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Season;
use App\Http\Requests\ProductRequest;

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

    public function store(ProductRequest $request)
    {
        $form = $request->validated();
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('fruits-img', 'public');
            $form['image'] = $imagePath;
        }
        $product = Product::create($form);
        $seasonIds = Season::where('name', $form['season'])->pluck('id');
        $product->seasons()->sync($seasonIds);

        return redirect('products');
    }
}
