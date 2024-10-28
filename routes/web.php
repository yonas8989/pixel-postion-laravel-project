<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", [JobController::class, 'index']);

Route::middleware("guest")->group(function () {
    Route::get("/register", [RegisterUserController::class, "create"]);
    Route::post("/register", [RegisterUserController::class, "store"]);

    Route::get("/login", [SessionController::class, "create"]);
    Route::post("/login", [SessionController::class, "store"]);
});

Route::get("/search",SearchController::class );
Route::get("/tags/{tag:name}",TagController::class );




Route::delete("/logout", [SessionController::class, "destroy"])->middleware("auth");
