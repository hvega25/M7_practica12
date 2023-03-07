<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\adminControlador;
use App\Http\Controllers\admin\clientesControlador;
use App\Http\Controllers\admin\ContabilidadControlador;
use App\Http\Controllers\admin\facturacionControlador;

Route::group(['middleware' => ['adb']], function(){
    Route::get('articulos', [adminControlador::class, 'articulos']);
});



Route::group(['middleware' => ['adb']], function(){
    Route::get('contabilidad', [ContabilidadControlador::class, 'contabilidad']);
});



Route::group(['middleware' => ['adb']], function(){
    Route::get('facturacion', [facturacionControlador::class, 'facturacion']);
});



Route::group(['middleware' => ['adb']], function(){
    Route::get('clientes', [clientesControlador::class, 'clientes']);
});
