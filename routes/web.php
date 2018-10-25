<?php

use App\Slider;

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
Route::auth();
Route::get(
    '/',
    function () {
        return view(
            'home',
            ['sliders' => json_encode(Slider::all())]
        );
    }
)->name('home');
Route::get(
    'contacts/',
    function () {
        return view('contacts');
    }
)->name('contacts');
Route::get('products/{category}', 'ProductController@index');
Route::redirect('price', 'products/1', 301);
Route::redirect('used', 'products/2', 301);
Route::group(
    [
        'name' => 'admin.',
        'prefix' => 'admin',
        'namespace' => 'Admin',
        'middleware' => ['auth', 'role:admin']
    ],
    function () {
        Route::get(
            '/',
            function () {
                return view(
                    'admin.index'
                );
            }
        );
        Route::get('products/', 'AdminProductController@index')->name('products.index');
        Route::get('products/edit/{product}', 'AdminProductController@edit')->name('products.edit');
        Route::get('products/create/', 'AdminProductController@create')->name('products.create');
        Route::post('products/', 'AdminProductController@store')->name('products.store');
        Route::patch('products/{product}', 'AdminProductController@update')->name('products.update');
        Route::delete('products/{category}', 'AdminProductController@delete')->name('products.delete');
        Route::get('categories/', 'AdminCategoryController@index')->name('categories.index');
        Route::get('categories/edit/{category}', 'AdminCategoryController@edit')->name('categories.edit');
        Route::get('categories/create/', 'AdminCategoryController@create')->name('categories.create');
        Route::post('categories/', 'AdminCategoryController@store')->name('categories.store');
        Route::patch('categories/{category}', 'AdminCategoryController@update')->name('categories.update');
        Route::delete('categories/{category}', 'AdminCategoryController@delete')->name('categories.delete');
    }
);
