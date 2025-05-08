<?php

use App\Http\Controllers\WilayahController;
use Illuminate\Support\Facades\Route;

Route::get("/",[WilayahController::class,"index"])->name("index");
Route::get("/create",[WilayahController::class,"create"])->name("create");
Route::post("/store",[WilayahController::class,"store"])->name("store");
Route::get("/edit/{wilayah}", [WilayahController::class,"edit"])->name("edit");
Route::post("/update/{wilayah}",[WilayahController::class,"update"])->name("update");
Route::delete("/destroy/{wilayah}",[WilayahController::class,"destroy"])->name("destroy");
