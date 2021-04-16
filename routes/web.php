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

Route::get('/', function () {
    return redirect('login');
});

Auth::routes();

Auth::routes(['register' => false]);


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/dashboard', function () {
    return view('admin.index');
})->middleware('auth');

Route::get('/admin/users', 'FrontendController@index')->middleware('auth');
Route::get('/admin/adduser', function (){
	return view('admin.adduser');
})->middleware('auth');

Route::post('admin/adduser', 'FrontendController@adduser')->middleware('auth');

Route::get('/admin/edituser/{id}', 'FrontendController@edituser')->middleware('auth');
Route::post('admin/updateuser', 'FrontendController@updateuser')->middleware('auth');
Route::get('/admin/deleteuser/{id}', 'FrontendController@Delete')->middleware('auth');

// Invoice 

Route::get('/admin/invoices', 'FrontendController@invoices')->middleware('auth');

Route::get('/admin/addinvoice', 'FrontendController@addinvoice')->middleware('auth');

Route::post('admin/addinvoice', 'FrontendController@invoice')->middleware('auth');
Route::get('/admin/invoice/{id}', 'FrontendController@webedit')->middleware('auth');
Route::post('admin/updateinvoice', 'FrontendController@updateinvoice')->middleware('auth');
Route::get('/admin/deleteinvoice/{id}', 'FrontendController@Delete')->middleware('auth');