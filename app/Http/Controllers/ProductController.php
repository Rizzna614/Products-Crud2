<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function show () {
        $product = Product::all();
        return view ("product", compact('product'));
    }

    public function store (Request $request) {
        $request->validate([
            "name" => "required",
        ]);

        Product::create(["name" => $request->name,]);

        $product = Product::all();

        return view ("product", compact('product'));
    }

    public function delete ($id) {
        Product::destroy($id);

        return view('deleted');
    }

    public function update ($id) {
        $product = Product::findorFail($id);

        return view ("update", compact('product'));
    }

    public function edit ($id, Request $request) {
            $name = $request->newName;

            DB::table("products")->where("id", $id)->update(["name"=>$name]);

            return view('updated');
    }
}
