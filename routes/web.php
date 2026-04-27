<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Models\Car;
use App\Models\Event;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get("/aboutOld", function () {
    return "<x-layout> <h1>About this page</h1> </x-layout>";
})->name('about');

Route::get("/aboutNew", function () {
    return view('about');
})->name('aboutNew');

Route::get("/info", function () {
    return view("info");
})->name('info');

Route::get("/products", [ProductController::class, "show"])->name('productsShow');

Route::get("/createproduct", function () {
    return view("createproduct");
})->name('productsCreate');

Route::post("/products", [ProductController::class, "store"])->name('productsStore');

Route::delete("/products/{id}", [ProductController::class, "delete"])->name("productsDelete");

Route::get("/update/{id}", [ProductController::class, "update"])->name("productsUpdate");
Route::put("/products/{id}", [ProductController::class, "edit"])->name("productsUpgrade");

Route::get("/testproducts", function () {
    return view("testproduct");
})->name('productsTest');

Route::get("/contact/create", function () {
    return view("contact.createForm");
})->name("contactsCreate");

Route::post("/contact", [ContactController::class, "store"])->name("contactsStore");

Route::get("/contact", [ContactController::class, "show"])->name("showContacts");

Route::get("/colors", function ($colors = ["red", "green", "blue", "yellow"]) {
    return view("random.colors", ["colors" => $colors]);
})->name("colors");

Route::get("/display-car", [Car::class, "create"]);

Route::get("/products/{id}", [ProductController::class, "copyProduct"])->name("copyProduct");

Route::get("/display-event", [EventController::class, "show"])->name("event.show");

Route::get("/display-events", [EventController::class, "index"])->name("event.index");

