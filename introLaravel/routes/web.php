<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

/*
RUTA TIPO GET
 Route::get('/', function () {
    return view('welcome');
}); 

shift + alt  +a = documentar
 */

 /* RUTA TIPO WIEW*/
 /* shift  + alt + a = documentar las líneas de código*/
//  modificación de las rutas con su renombre
// es importante aclarar que al renombrarla y cambiamos su estructura no pasa nada, pero, si se cambia el renombre sí
/* Route::view('/', 'inicio' )->name('rutainicio');
Route::view('/form', 'formulario' )->name('rutaform');
Route::view('/clientes', 'clientes' )->name('rutaclientes');
Route::view('/component', 'componentes')->name('rutacomponentes'); */


// sintaxis nuevas para las rutas del tipo get

Route::get('/', [ControladorVistas::class, 'home'])->name('rutainicio'); //ruta en la que se trabaja con la función desde el controlador con su renombre
Route::get('/form', [ControladorVistas::class, 'formulario'])->name('rutaform');
Route::get('/clientes', [ControladorVistas::class, 'consulta'])->name('rutaclientes');

Route::view('/component', 'componentes')->name('rutacomponentes');



