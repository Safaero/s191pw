<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

Route::get('/',[controladorVistas::class,'home'])->name('rutainicio'); 

Route::get('/',[controladorVistas::class,'insert'])->name('rutacacas'); 

Route::get('/',[controladorVistas::class,'select'])->name('rutaconsulta'); 

Route::get('/', function () {
});
/* Route::view('/','inicio')->name('rutainicio');
Route::view('/consultar','clientes')->name('rutaconsulta');
Route::view('/form','formulario')->name('rutacacas'); */
Route::view('/component','componentes')->name('rutacomponentes');
