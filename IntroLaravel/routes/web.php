<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('clientes');
});
Route::view('/','clientes');
Route::view('/formulario','formulario');
