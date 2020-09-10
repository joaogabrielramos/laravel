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

Route::get('/', function () {
    return view('welcome');
});
    //Route post
Route::get("post","PostController@listAllPosts")->name('post.listAll');


Route::get("post/novo","PostController@createPost")->name('post.add');

Route::post('post/store','PostController@storePost')->name('post.store');

Route::delete('post/destroy/{post}','PostController@destroy')->name('post.destroy');






Route::group(['namespace'=>'Form'],function(){
    //Verbo GET

Route::get("listagem-usuario","UserController@listUser");

Route::get("usuarios","TestController@listAllUsers")->name('users.listAll');

Route::get("usuarios/novo","TestController@FormAddUser")->name('users.formAddUser');

Route::get("usuarios/editar/{user}","TestController@FormEditUser")->name('users.formAddUser');

Route::get("usuarios/{user}","TestController@listUser")->name('users.list');


//Verbo POST

Route::post("usuarios/store","TestController@storeUser")->name('users.store');


//Verbo PUT/PATCH

Route::put('usuarios/edit/{user}','TestController@edit')->name('users.edit');


//Verbo DELETE
Route::delete('usuarios/destroy/{user}','TestController@destroy')->name('users.destroy');




});

