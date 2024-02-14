<?php

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

Route::get("/", \App\Http\Controllers\ShowMainPageController::class)->name("main");

Route::name("movies.")->group(function () {
    Route::get("/movies", \App\Http\Controllers\Movies\IndexController::class)->name("index");
    Route::get("/movies/{movie}", \App\Http\Controllers\Movies\ShowController::class)->name("show");
});
Route::name("cinemas.")->group(function () {
    Route::get("/cinemas", \App\Http\Controllers\Cinemas\IndexController::class)->name("index");
    Route::get("/cinemas/{cinema}", \App\Http\Controllers\Cinemas\ShowController::class)->name("show");
});
Route::name("authors.")->group(function () {
    Route::get("/authors", \App\Http\Controllers\Authors\IndexController::class)->name("index");
    Route::get("/authors/{author}", \App\Http\Controllers\Authors\ShowController::class)->name("show");
});
Route::name("ganres.")->group(function () {
    Route::get("/ganres", \App\Http\Controllers\Ganres\IndexController::class)->name("index");
    Route::get("/ganres/{ganre}", \App\Http\Controllers\Ganres\ShowController::class)->name("show");
});

Route::middleware("guest")->name("user.")->group(function () {
   Route::get("/login", \App\Http\Controllers\User\LoginController::class)->name("login");
   Route::post("/login", \App\Http\Controllers\User\AuthController::class)->name("auth");

   Route::get("/register", \App\Http\Controllers\User\RegisterController::class)->name("register");
   Route::post("/register", \App\Http\Controllers\User\StoreController::class)->name("store");
});

Route::fallback(fn() => abort(404));

require __DIR__."/user.php";
require __DIR__."/admin.php";

