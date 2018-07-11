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
use Illuminate\Support\Facades\Request;
use App\Usuario;

/*
Route::get('/', function(){
    return view('layout.principal');
});
Route::get('/', function () {
return view('welcome');});


Route::resource('/tipoveiculo', 'tipoController');
*/
Route::get('/', function(){
	return view('layout.principal');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::post('/login', 'UserController@login')->name('login');

Route::get('/Paciente', 'UserController@Paciente')->name('Paciente');

Route::get('/cadastraPaciente', 'UserController@cadastraPaciente')->name('cadastraPaciente');

Route::get('/cadastraAll', 'UserController@cadastraAll')->name('cadastraAll');

Route::get('/Administrador', 'UserController@Administrador')->name('Administrador');

Route::get('/areaOperador', 'UserController@areaOperador')->name('areaOperador');

Route::get('/cadastraExame', 'UserController@cadastraExame')->name('cadastraExame');

Route::get('/lista', 'ExameController@lista')->name('lista');

Route::get('/listaProc', 'ProcedimentoController@listaProc')->name('listaProc');


Route::post('/atualizaPreco', 'ProcedimentoController@atualizaPreco')->name('atualizaPreco');

Route::resource('/exames', 'ExameController');

Route::resource('/procedimentos', 'ProcedimentoController');

Route::resource('/usuarios', 'UserController');