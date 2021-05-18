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

Route::group(['prefix' => 'user'], function () {
	Route::get('/', ['uses' => 'UserController@index']);
	Route::get('add', ['uses' => 'UserController@create']);
	Route::post('add', ['uses' => 'UserController@post']);
	Route::get('id', ['uses' => 'UserController@show']);

});



/*
Route::get('foo/bar', function () {
	return view('foo.bar', ['foo' => '<a>Teste ht</a>']);
});

Route::get('foo/baz', function () {
	return view('foo.baz');
});

Route::group(['prefix' => 'user'], function () {
	//chamando o método index do controller
	Route::get('/', ['user' => 'UserController@index']);
	//chamando o método show do controller
	Route::get('id', ['user' => 'UserController@show']);

})
/*
Route::get('foo', function () {
	return "Método get";
});

Route::post('afoo', function () {
	return "Método post";
});
*/

?>