<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return csrf_token();
    //CFlxINTB6ub6uVMNXAYqMg1DjuCnKFVodVbsXT3S
    //WECRWhabUu2XrqiaalxWQFIS0RuDTXKEhuykRpka
    //xz8fzXy1jcLy1cK50sHP5hHfUyDfCQZVh9RNgohk
});

//rutas para el parcial primer punto
Route::post('/pais/store', 'PaisController@store');//guardar
Route::post('/pais/update', 'PaisController@update');//actualizar

//rutas para el parcial segundo punto
Route::post('/estudiante/store', 'EstudianteController@store');//guardar
Route::post('/estudiante/update', 'EstudianteController@update');//actualizar

//rutas para el parcial tercer punto
Route::post('/pelicula/store', 'PeliculaController@store');//guardar
Route::post('/pelicula/update', 'PeliculaController@update');//actualizar

//rutas para el parcial cuarto punto
Route::post('/calificacion/store', 'CalificacionController@store');//guardar
Route::post('/calificacion/update', 'CalificacionController@update');//actualizar
Route::post('/calificacion/destroy', 'CalificacionController@destroy');//Eliminar


