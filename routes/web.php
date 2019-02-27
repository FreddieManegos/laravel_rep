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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function(){
    return view('admin.admin');

});

Route::group(['middleware'=>'admin'],function (){

});

Route::resource('admin/users','AdminUserController');

Route::get('/admin/user/roles', ['middleware' => 'role', function (){

    return "Middle Ware ROLE";

}]);


Route::get('logout', 'Auth\LoginController@logout', function () {
    return abort(404);
});


Route::resource('admin/posts','AdminPostsController');