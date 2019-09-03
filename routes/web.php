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
    return view('welcome');
});


Route::get('/usuarios', 'usuarioController@index')->name('showUsers') ;

Route::get('/verUsuario', 'usuarioController@create')->name('shUsers') ;
//este debe guardar los datos a la base de datos
Route::post('/agregarUsuario', 'usuarioController@store')->name('addUser') ;

Route::get('/editarUsuario/{id}', 'usuarioController@edit')->name('editUsers');
Route::patch('/editUsuario/{id}', 'usuarioController@update')->name('edit2Users');
Route::delete('/eliminarUsuario/{id}', 'usuarioController@destroy')->name('deleteUsers');

//---------------------------------------------------------------------------------------

Route::get('/direccion', 'direccionController@index')->name('showAdress');
//abre la ventana con los compos a llenar
Route::get('/abrirDireccion', 'direccionController@create')->name('openAdress');
//agregar una direccion
Route::post('/agregarDireccion', 'direccionController@store')->name('addAdress') ;
//para poder agregar un campo se necesita poner la ruta edit
Route::get('/editarDireccion/{id}', 'direccionController@edit')->name('editAdress');
//crear la ruta para actualizar
Route::patch('/actualizarAdress/{id}', 'direccionController@update')->name('updateAdress');
//definir la ruta para eliminar 
Route::delete('/eliminarDireccion/{id}', 'direccionController@destroy')->name('deleteAdress');

//Route::resource('direccion2', 'direccionController');
//Route::resource('usuario', 'usuarioController');


