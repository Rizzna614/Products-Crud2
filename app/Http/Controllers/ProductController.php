<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


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

    public function update ($id) {
        $product = Product::findorFail($id);

        return view ("update", ["product" => $product]);
    }

    public function edit ($id, Request $request) {
            $name = $request->newName;

            DB::table("products")->where("id", $id)->update(["name"=>$name]);

            return "<h1>Updated succsefully</h1> <a href = '/'>Home</a>";
    }
}
