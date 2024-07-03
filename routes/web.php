<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get("/", [PostController::class, "index"]);
Route::get("/posts/{id}", [PostController::class, "show"])->middleware("isAuth");

Route::get("/register", [AuthController::class, "showRegisterPage"])->middleware("notAuth");
Route::get("/login", [AuthController::class, "showLoginPage"])->middleware("notAuth");
Route::post("/register", [AuthController::class, "register"])->middleware("notAuth");
Route::post("/login", [AuthController::class, "login"])->middleware("notAuth");
Route::get("/logout", [AuthController::class, "logout"])->middleware("isAuth");

Route::get("/createpost", [PostController::class, "showCreatePostPage"])->middleware("isAuth");
Route::post("/createpost", [PostController::class, "store"])->middleware("isAuth");

Route::post("/createcomment", [CommentController::class, "store"])->middleware("isAuth");

