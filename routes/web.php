<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register',[AuthController::class,"showRegister"])->name("show.register");
Route::get('login',[AuthController::class,"showLogin"])->name("show.login");
Route::post('register',[AuthController::class,"register"])->name("register");
Route::post('login',[AuthController::class,"login"])->name("login");
Route::post('logout',[AuthController::class,"logout"])->name("logout");


Route::controller(NinjaController::class)->prefix("/ninjas")->name("ninja.")->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{ninja}', 'show')->name('show');
    Route::post("/", 'store')->name("store");
    Route::delete("/{ninja}", 'destroy')->name('destroy');
});
