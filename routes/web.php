<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\EmpleadoController;



Route::get('/', function(){
	return view('welcome');
})->name('home');

Route::get('hola', function() {
	return 'APRENDIENDO CON LARAVEL';
});

//Route::get('/Empleados', function(){
//	return view('Empleados.blade.php');
//})->name('Empleados');

//Route::get('Empleados/create', [EmpleadoController::class, 'create'] );

Route::resource('Empleados', 'EmpleadoController');

Route::get('blogs', function(){
	return view('blogs');
})->name('blogs');


Route::get('nosotros/{nombre?}', function($nombre = null){

	$equipo = ['Jose', 'Andres', 'Miguel'];

	//return view('nosotros', ['equipo'=> $equipo]);
	return view('nosotros', compact('equipo', 'nombre'));
})->name('nosotros');

