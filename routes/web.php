<?php

use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(NinjaController::class)->prefix("/ninjas")->name("ninja.")->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{ninja}', 'show')->name('show');
    Route::post("/", 'store')->name("store");
    Route::delete("/{ninja}", 'destroy')->name('destroy');
});
