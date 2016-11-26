<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */



Route::get('/', function () {
  return view('auth.login');
});
//Route::get('/', 'FrontEndController@index');
Route::get('home', 'FrontEndController@index');
Route::get('search', 'searchController@index');


     
    
    


Route::controllers([
  /* Inicio de Session */
  'auth'       => 'Auth\AuthController',
  'password'   => 'Auth\PasswordController',
  /* Ingreso al Menu Principal */
  'menu'       => 'Menu\MenuController',
  /* Modulo Administraccion */
  'amortizacion'    => 'Amortizacion\AmortizacionController',
  //'amortizacion' => 'Amortizacion\SearchController',
  'credito'    => 'Credito\CreditoController',
  'afiliado'    => 'Afiliado\AfiliadoController', 
  'transaccion'    => 'Transaccion\TransaccionController', 
    

]);