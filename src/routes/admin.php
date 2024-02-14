<?php

use Illuminate\Support\Facades\Route;

Route::middleware(["auth", "is.admin"])->name("admin.")->group(function () {
    Route::get("/admin", \App\Http\Controllers\Admin\AdminPanelController::class)->name("admin-panel");

    Route::name("user.")->group(function () {
        Route::get("/admin/users", \App\Http\Controllers\User\IndexController::class);
        Route::delete("/admin/users/{user}", \App\Http\Controllers\User\DeleteController::class)->name("delete");
    });


    Route::name("movies.")->group(function () {
        Route::get("/admin/movies", \App\Http\Controllers\Movies\AdminIndexController::class);
        Route::get("/admin/movies/create", \App\Http\Controllers\Movies\CreateController::class)->name("create");
        Route::post("/admin/movies", \App\Http\Controllers\Movies\StoreController::class)->name("store");

        Route::get("/admin/movies/{movie}/edit", \App\Http\Controllers\Movies\EditController::class)->name("edit");
        Route::patch("/admin/movies/{movie}", \App\Http\Controllers\Movies\UpdateController::class)->name("update");
        Route::delete("/admin/movies/{movie}", \App\Http\Controllers\Movies\DeleteController::class)->name("delete");
    });


    Route::name("cinemas.")->group(function () {
        Route::get("/admin/cinemas", \App\Http\Controllers\Cinemas\AdminIndexController::class);
        Route::get("/admin/cinemas/create", \App\Http\Controllers\Cinemas\CreateController::class)->name("create");
        Route::post("/admin/cinemas", \App\Http\Controllers\Cinemas\StoreController::class)->name("store");

        Route::get("/admin/cinemas/{cinema}/edit", \App\Http\Controllers\Cinemas\EditController::class)->name("edit");
        Route::delete("/admin/cinemas/{cinema}", \App\Http\Controllers\Cinemas\DeleteController::class)->name("delete");
        Route::patch("/admin/cinemas/{cinema}", \App\Http\Controllers\Cinemas\UpdateController::class)->name("update");
    });

    Route::name("authors.")->group(function () {
        Route::get("/admin/authors", \App\Http\Controllers\Authors\AdminIndexController::class);
        Route::get("/admin/authors/create", \App\Http\Controllers\Authors\CreateController::class)->name("create");
        Route::post("/admin/authors", \App\Http\Controllers\Authors\StoreController::class)->name("store");

        Route::get("/admin/authors/{author}/edit", \App\Http\Controllers\Authors\EditController::class)->name("edit");
        Route::delete("/admin/authors/{author}", \App\Http\Controllers\Authors\DeleteController::class)->name("delete");
        Route::patch("/admin/authors/{author}", \App\Http\Controllers\Authors\UpdateController::class)->name("update");
    });

    Route::name("ganres.")->group(function () {
        Route::get("/admin/ganres", \App\Http\Controllers\Ganres\AdminIndexController::class);
        Route::get("/admin/ganres/create", \App\Http\Controllers\Ganres\CreateController::class)->name("create");
        Route::post("/admin/ganres", \App\Http\Controllers\Ganres\StoreController::class)->name("store");

        Route::get("/admin/ganres/{ganre}/edit", \App\Http\Controllers\Ganres\EditController::class)->name("edit");
        Route::delete("/admin/ganres/{ganre}", \App\Http\Controllers\Ganres\DeleteController::class)->name("delete");
        Route::patch("/admin/ganres/{ganre}", \App\Http\Controllers\Ganres\UpdateController::class)->name("update");
    });
});
