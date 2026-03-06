<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/about", function () {
    return "<h1>About this page</h1>";
});

Route::get("/info", function () {
    return view("info");
});
