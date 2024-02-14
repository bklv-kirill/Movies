<?php

use Illuminate\Support\Facades\Route;

Route::middleware("auth")->group(function () {
    Route::name("user.")->group(function () {
        Route::get("/logout", \App\Http\Controllers\User\LogOutController::class)->name("logout");

        Route::get("/profile", \App\Http\Controllers\User\ProfileController::class)->name("profile");
        Route::patch("/profile", \App\Http\Controllers\User\UpdateController::class)->name("update");
        Route::delete("/profile", \App\Http\Controllers\User\DeleteController::class)->name("delete");

        Route::name("favorite-movies.")->group(function () {
            Route::get("/profile/favoriteMovies", \App\Http\Controllers\FavoriteMovies\IndexController::class)->name("index");
            Route::post("/profile/favoriteMovies/{movie}", \App\Http\Controllers\FavoriteMovies\StoreController::class)->name("store");
            Route::delete("/profile/favoriteMovies/{movie}", \App\Http\Controllers\FavoriteMovies\DeleteController::class)->name("delete");
            Route::get("/profile/favoriteMovies/{movie}", \App\Http\Controllers\FavoriteMovies\ShowController::class)->name("show");
        });
        Route::name("favorite-authors.")->group(function () {
            Route::get("/profile/favoriteAuthors", \App\Http\Controllers\FavoriteAuthors\IndexController::class)->name("index");
            Route::post("/profile/favoriteAuthors/{author}", \App\Http\Controllers\FavoriteAuthors\StoreController::class)->name("store");
            Route::delete("/profile/favoriteAuthors/{author}", \App\Http\Controllers\FavoriteAuthors\DeleteController::class)->name("delete");
            Route::get("/profile/favoriteAuthors/{author}", \App\Http\Controllers\FavoriteAuthors\ShowController::class)->name("show");
        });
    });
});
