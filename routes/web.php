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


Route::get('/', function ($guard = null) {
    if (Auth::guard($guard)->check()) {
        return redirect('/dashboard');
    }
    else {
        return view('auth.login');
    }
    
});


Auth::routes(['register' => false]);
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
# Route::get('/home', 'HomeController@index')->name('home');
Route::resource('pajak','PajakController');
  
Route::get('export','PajakController@export')->name('export'); # export data