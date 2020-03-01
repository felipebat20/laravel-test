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
Route::group(['prefix'=>'pessoas'], function() {
   Route::get('/', "PessoasController@index");
   Route::get('/novo', "PessoasController@novoView");
   Route::post('/store', "PessoasController@store");
});

Route::permanentRedirect('/felipe', 'pessoas');

Route::view('/services', 'template.app', ['name'=>'felipe']);
// Route::get('/', function() {
//     return view('template.app');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::group(['prefix' => 'pessoas'], function(){
//     Route::get('/','PessoasController@index');
// });

// Route::group(['prefix' => 'teste'], function(){
//     Route::get('/teste2',function (){
//         return view ('teste');
//     });
    
// });

// Route::get('/teste', function(){
//     return view('teste');
// });