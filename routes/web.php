<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\StaffsController;

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
Route::get('/fahamu', 'PagesController@getFahamu');
Route::get('/huduma', 'PagesController@getHuduma');
Route::get('/index', 'PagesController@getIndex');
Route::get('/pages/login', 'PagesController@getLogin');


// Route::post('/login/submit', 'LoginController@submit');
// Route::post('/dashboard/register', 'ClientController@register');
// Route::get('pages/dashboard', 'ClientController@getClients');


Route::resource('clients', 'newClientController');

Route::get('/', 'PagesController@getIndex');

Auth::routes();

Route::get('/pages/home', [App\Http\Controllers\LHomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
