<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get("/about", function () {
    return "<x-layout> <h1>About this page</h1> </x-layout>";
})->name('about');

Route::get("/info", function () {
    return view("info");
})->name('info');

Route::get("/products", [ProductController::class, "show"])->name('productsShow');

Route::get("/createproduct", function () {
    return view("createproduct");
})->name('productsCreate');

Route::post("/products", [ProductController::class, "store"])->name('productsStore');

Route::delete("/products/{id}", [ProductController::class, "delete"])->name("delete");

Route::get("/update/{id}", [ProductController::class, "update"])->name("update");
Route::put("/products/{id}", [ProductController::class, "edit"])->name("upgrade");

Route::get("/testproducts", function () {
    return view ("testproduct");
})->name('productsTest');