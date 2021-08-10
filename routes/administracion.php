<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix' => 'modulos/admision', 'middleware' => ['auth:web'], 'verified'], function () {

    /* SubModulo Medico */
    Route::namespace('Modulos\Administracion')->prefix('paciente')->group(function () {
        //Modulo de Cirugia
        Route::get('cargar_paciente/{nombre}', 'PacienteController@ConsultarPaciente');

        //Modulo de genero
        Route::get('cargar_genero', 'PacienteController@consultargenero');

        Route::get('cargar_provincia', 'PacienteController@consultarProvincia');
        Route::get('cargar_ciudad/{idprovincia}', 'PacienteController@consultarciudad');
        
       
    });
   });