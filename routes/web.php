<?php

use App\Http\Controllers\NinjaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ninjas',[NinjaController::class,'index'])->name('ninja.index');
Route::get('/ninjas/create', [NinjaController::class,'create'])->name('ninja.create');
Route::get('/ninjas/{ninja}',[NinjaController::class,'show'])->name('ninja.show');
Route::post("/ninjas",[NinjaController::class,'store'])->name("ninja.store");
Route::delete("ninjas/{ninja}",[NinjaController::class,'destroy'])->name('ninja.destroy');