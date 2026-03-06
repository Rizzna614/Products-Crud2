<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", function () {
    return "<h1>About this page</h1>";
});

Route::get("/info", function () {
    return view("info");
});

Route::get("/products", [ProductController::class, "show"]);

Route::get("/createproduct", function () {
    return view("createproduct");
});

Route::post("/products", [ProductController::class, "store"]);

Route::delete("/products/{id}", [ProductController::class, "delete"])->name("delete");

Route::get("/update/{id}", [ProductController::class, "update"])->name("update");
Route::put("/products/{id}", [ProductController::class, "edit"])->name("upgrade");