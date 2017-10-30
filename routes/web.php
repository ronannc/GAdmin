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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('caixaC', function(){
	return view('Admin/Orsamento/caixaC');
});

Route::get('caixaS', function(){
	return view('Admin/Orsamento/caixaS');
});

Route::get('pintura', function(){
	return view('Admin/Orsamento/pintura');
});

Route::get('recorte', function(){
	return view('Admin/Orsamento/recorte');
});

Route::get('aPagar', function(){
	return view('Admin/Contabilidade/aPagar');
});

Route::get('aReceber', function(){
	return view('Admin/Contabilidade/aReceber');
});

//controle de rotas da contabilidade, procura dereto no conroller (conabilidadeController)
Route::resource('balanco', 'ContabilidadeController');


