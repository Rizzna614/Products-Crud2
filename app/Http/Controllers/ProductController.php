<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


class ProductController extends Controller
{
    public function show (Request $request) {
        $limit = $request->query('limit', 100);

        $product = Product::limit($limit)->get();

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

            /* $request->validate([
            "newName" => "required",
            ]); */

            /* if ($request->newStatus == null && $request->newName == null) {
            $status = Product::findOrFail($id)->status;
            $name = Product::findOrFail($id)->name;
            } else if ($request->newStatus == null) {
                $status = Product::findOrFail($id)->status;
                $name = $request->newName;
            } else {
                $status = $request->newStatus;
                if ($request->newName == null) {
                    $name = Product::findOrFail($id)->name;
                } else {
                    $name = $request->newName;
                }
            } */

            if ($request->newName == null) {
                $name = Product::findOrFail($id)->name;
            } else {
                $name = $request->newName;
            }

            $status = Product::findOrFail($id);
            $status->status = $request->select;

            $status->save();

            DB::table("products")->where("id", $id)->update(["name"=>$name, /*"status"=>$status*/]);

            return view('updated');
    }

    public function copyProduct (Request $request, $id) {

        $product = Product::findOrFail($id);

        $productCopy = Product::create(["name" => "Copy of ". $product["name"],]);

        return view("productCopy", ["product" => $productCopy]);
    }
}
