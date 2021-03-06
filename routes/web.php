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
   Route::get('/novo', "PessoasController@novoView");
   Route::get('/{id}/editar', "PessoasController@editarView");
   Route::get('/{id}/destroy', "PessoasController@destroy");
   Route::get('/index', "PessoasController@index");
   Route::post('/store', "PessoasController@store");
   Route::post('/update', "PessoasController@update");
   Route::get('/{id}/excluir', "PessoasController@excluirView");
   Route::post('/busca', "PessoasController@busca");
   Route::get('/{letra}', "PessoasController@index");
   Route::redirect('/', '/pessoas/A');
});

// Routes Test
Route::permanentRedirect('/felipe', 'pessoas');

Route::view('/services', 'template.app', ['name'=>'felipe']);

Route::get('/user/{id}', function($id){
   return 'User'.$id;
});

Route::get('aluno/{name?}', function($name = 'Felipe'){
   return $name;
});

Route::get('teacher/{name}', function($name){

}) ->Where('name', '[A-Za-z]+');

Route::get('academic/profile', function() {
   return 2+2;
})->name('profile');




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