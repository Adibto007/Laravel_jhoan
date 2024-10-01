<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorCliente;

Route::get('/',[ControladorCliente::class, 'index']);

Route::get('user/{id}',[ControladorCliente::class, 'viewUser']);


Route::get('cliente',[ControladorCliente::class, 'cliente']);

Route::get('cliente/{id}',[ControladorCliente::class, 'cedula']);