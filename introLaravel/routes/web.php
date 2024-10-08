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
//  modificación de las rutas con su renombre
// es importante aclarar que al renombrarla y cambiamos su estructura no pasa nada, pero, si se cambia el renombre sí
Route::view('/', 'inicio' )->name('rutainicio');
Route::view('/form', 'formulario' )->name('rutaform');
Route::view('/clientes', 'clientes' )->name('rutaclientes');



