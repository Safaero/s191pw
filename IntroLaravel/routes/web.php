<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
});
Route::view('/','inicio')->name('rutainicio');
Route::view('/consultar','clientes')->name('rutaconsulta');
Route::view('/form','formulario')->name('rutacacas');
Route::view('/component','componentes')->name('rutacomponentes');
