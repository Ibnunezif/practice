<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->middleware('guest')->group(function (){
    Route::get('register',"showRegister")->name("show.register");
    Route::get('login',"showLogin")->name("show.login");
    Route::post('register',"register")->name("register");
    Route::post('login',"login")->name("login");
});
Route::post('logout',[AuthController::class,"logout"])->name("logout");


Route::controller(NinjaController::class)->prefix("/ninjas")->middleware('auth')->name("ninja.")->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::get('/{ninja}', 'show')->name('show');
    Route::post("/", 'store')->name("store");
    Route::delete("/{ninja}", 'destroy')->name('destroy');
});
