<?php

use Illuminate\Support\Facades\Route;

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

// Menu Bar
Route::get('/', 'sitecontroller@home')->name('site.home');
Route::get('/sobre', 'sitecontroller@sobre')->name('site.sobre');
Route::get('/produtos', 'sitecontroller@produtos')->name('site.produtos');
Route::get('/contato', 'sitecontroller@contato')->name('site.contato');

// Cotações
Route::get('/cotacaoflakeverde', 'sitecontroller@cotacaoflakeverde')->name('site.cotflverde');
Route::get('/cotacaoflakecristal', 'sitecontroller@cotacaoflakecristal')->name('site.cotflcristal');
Route::get('/cotmasterplast', 'sitecontroller@cotmasterplast')->name('site.cotmasterplast');


/*
Route::get('/', function () {
    return view('welcome');
});*/
