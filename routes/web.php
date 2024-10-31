<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::get("/", [JobController::class, 'index'])->name('home');

Route::middleware("guest")->group(function () {
    Route::get("/register", [RegisterUserController::class, "create"]);
    Route::post("/register", [RegisterUserController::class, "store"]);

    Route::get("/login", [SessionController::class, "create"])->name("login");
    Route::post("/login", [SessionController::class, "store"]);
});
Route::resource('/jobs',JobController::class)->middleware(["auth"]);
Route::get("/search",SearchController::class );
Route::get("/tags/{tag:name}",TagController::class );
Route::delete("/logout", [SessionController::class, "destroy"])->middleware("auth");
