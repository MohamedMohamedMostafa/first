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


Route::get('landing', function () {
    return view('landing');
});
Route::get('/about', function () {
    return view('about');
});



Route::get('sh', 'Front\UserController@showIndex');


Route::get('show_string', function () {
    return 'welcome';
})->name('a');


/*Route::group(['prefix' => 'users',], function () {
    Route::get('/', function () {
        return 'work';
    });

    Route::get('show', 'UserController@showAdminName');
    Route::put('update', 'UserController@showAdminName');
    Route::get('edit', 'UserController@showAdminName');
    Route::delete('delete', 'UserController@showAdminName');


});*/
/*Route::get('show', 'Front\SecondController@showString0');

Route::group(['namespace' => 'Front'], function () {
    Route::get('show0', 'SecondController@showString0')->middleware('auth');
    Route::get('show1', 'SecondController@showString1');
    Route::get('show2', 'SecondController@showString2');
    Route::get('show3', 'SecondController@showString3');

});*/
Route::get('login', function () {
    return 'must be login';
})->name('login');

Route::resource('news', 'NewsController');

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')-> middleware('verified');

Route::get('redirect/{service}','SocialController@redirect');
Route::get('callback/{service}','SocialController@callback');

