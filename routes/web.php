<?php
Route::get('/cats/{id}','CatsController@showOneCat')->name('cats');
Route::get('/stats', 'CatsController@stats')->name('stats');
Route::get('/', 'CatsController@showCats')->name('listecats');
Route::prefix('admin')->group(function () {
    Route::resource('cats', 'CatsController', ['prefix' => 'admin']);
    Route::get('/create', function () {return view('site/create');});
});
Route::get('/search', 'CatsController@search');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
