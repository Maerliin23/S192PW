<?php

use Illuminate\Support\Facades\Route;

/*
RUTA TIPO GET
 Route::get('/', function () {
    return view('welcome');
}); 

shift + alt  +a = documentar
 */

 /* RUTA TIPO WIEW*/
Route::view('/', 'welcome' );
Route::view('/form', 'formulario' );



