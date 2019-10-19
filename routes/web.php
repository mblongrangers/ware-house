<?php


Route::resource('/schedule', 'ScheduleController');
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/ppic', 'PageController@ppic')->name('ppic');

Route::post('/ppic', 'PageController@postPpic')->name('page.postPpic');

Route::get('/discount', 'PageController@discount')->name('discount');

Route::group(['prefix' => config('backpack.base.route_prefix'), 'middleware' => ['admin'], 'namespace' => 'Admin'], function() {
	CRUD::resource('materialcategoryschedule', 'MaterialCategoryScheduleCrudController');
	CRUD::resource('schedule', 'ScheduleCrudController');
	CRUD::resource('materialcategory', 'MaterialCategoryCrudController');
	CRUD::resource('material', 'MaterialCrudController');
	CRUD::resource('sell', 'SellCrudController');
	CRUD::resource('packing', 'PackingCrudController');
	CRUD::resource('good', 'GoodCrudController');
	CRUD::resource('production', 'ProductionCrudController');
	CRUD::resource('user', 'UserCrudController');
	CRUD::resource('product', 'ProductCrudController');
	CRUD::resource('category', 'CategoryCrudController');
});
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
