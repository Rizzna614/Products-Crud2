<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    public function show () {
        return view ("product", ["product" => Product::all()]);
    }

    public function store (Request $request) {
        Product::create(["name" => $request->name,]);

        return view ("product", ["product" => Product::all()]);
    }

    public function delete ($id) {
        Product::destroy($id);

        return "<h1>Sucsessfully deleted!</h1> <a href = '/'>Home</a>";
    }
}
