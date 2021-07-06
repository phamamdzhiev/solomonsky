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

Route::get('/', 'HomeController@index');
Route::get('/holiday/{id}', 'HomeController@singleHoliday');
Route::get('/about-us', function () {
    return view('pages.about');
});
Route::get('/documents',  function () {
    return view('pages.documents');
});
Route::get('/terms',  function () {
    return view('pages.terms');
});
Route::get('/contacts',  function () {
    return view('pages.contacts');
});

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes([
    'register' => false,
    'reset' => false
]);
Route::resource('admin', 'HolidaysController');
//Route::auth();
//Route::get('/logout', 'Auth\LoginController@logout')->name('logout' );
