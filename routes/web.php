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

 
 Route::get('/category', function () {
     return view('admin.category');
 });
Route::get('/dash', function () {
     return view('dash');
 });
// Route::get('/product', function () {
//     return view('admin.product');
// });
Route::post('filter/{id}','filterController@index');

Route::post('brand','filterController@create');
 Route::post('add','CategoryController@store');
 Route::get('display','CategoryController@index');
 Route::post('plus','SubcategoryController@store');
 Route::get('see','SubcategoryController@show');
 Route::post('photo','ProductController@store');
 Route::get('show','ProductController@show');
 Route::get('saree','ProductController@edit');
Route::get('kurti','ProductController@apply');
Route::get('suit','ProductController@share');
Route::get('kurta','ProductController@find');

Route::get('asopalav','ProductController@brand');
Route::get('gulab','ProductController@carry');
Route::get('biba','ProductController@retry');
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');
