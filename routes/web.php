<?php

use App\Http\Controllers\WilayahController;

Route::resource('wilayah', WilayahController::class);
Route::get('/', function () {
    return view('wilayah.index');
});