<?php

use App\Http\Controllers\RolController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


#Esta sera la pantalla principal del login y le cambiere el nombre con el metodo name
Route::get('/', function(){
    return view('index');
});

Route::post('login',  [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout']);

#Antes que nada aqui vamos a tener que ponerles un middleware de auntentificacion
#Para que el usuario no salte el login y pueda entrar juan cuerdas
#En este caso seran todas las rutas que dispondra el dashboard
#Agregar un Middleware
Route::group(['prefix' => 'admin'], function() {
    Route::get('', function(){
        return view('admin/index');
    });
    Route::get('create', [UserController::class, 'create']);
    Route::post('store',[UserController::class, 'register']);    
});

Route::get('register', function() {
    return view('register');
});
/*
#Agregar un Middleware
Route::group(['prefix' => 'empleado'], function(){
    Route::get('create',[RolController::class, 'create']);
    Route::post('store', [RolController::class, 'store']);
});
*/