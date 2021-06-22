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

Route::get('/login', 'LoginController@index');
Route::post('/login',[
    'as' =>'authenticated',
    'uses' =>'LoginController@authenticated'
]);

Route::get('/home', function () {
	return view('home');
})->name('home');





Route::prefix('admin')->group(function () {
    Route::prefix('caterogies')->group(function () {
        Route::get('/', [
            'as' => 'categories.index',
            'uses' => 'CategoryController@index',
        ]);

        Route::get('/create', [
            'as' => 'categories.create',
            'uses' => 'CategoryController@create',
        ]);

        Route::post('/store', [
            'as' => 'categories.store',
            'uses' => 'CategoryController@store',
        ]);

        Route::get('/delete/{id}', [
            'as' => 'categories.delete',
            'uses' => 'CategoryController@delete_',
        ]);

        Route::get('/edit', [
            'as' => 'categories.edit',
            'uses' => 'CategoryController@edit',
        ]);

        Route::post('/edit', [
            'as' => 'categories.editPost',
            'uses' => 'CategoryController@editPost',
        ]);
    });

    Route::prefix('menus')->group(function () {
        Route::get('/', [
            'as' => 'menus.index',
            'uses' => 'MenusController@index',
        ]);

        Route::get('/create', [
            'as' => 'menus.createGet',
            'uses' => 'MenusController@createGet',
        ]);

        Route::post('/create', [
            'as' => 'menus.createPost',
            'uses' => 'MenusController@createPost',
        ]);

        Route::get('/edit', [
            'as' => 'menus.editGet',
            'uses' => 'MenusController@editGet',
        ]);

        Route::get('/delete', [
            'as' => 'menus.delete',
            'uses' => 'MenusController@delete',
        ]);
    });

     Route::prefix('product')->group(function () {
        Route::get('/', [
            'as' => 'product.index',
            'uses' => 'AdminProductController@index',
        ]);

        Route::get('/add',[
            'as' => 'product.createGet',
            'uses' => 'AdminProductController@createGet',
        ]);

        Route::post('/add',[
            'as' => 'product.createPost',
            'uses' => 'AdminProductController@createPost',
        ]);
    });
});



