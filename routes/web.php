<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', function () { return view('ExampleComponent'); });
Route::get('/aboutus', function () { return view('ExampleComponent'); });
Route::get('/sunission', function () { return view('ExampleComponent'); });
Route::get('/downlload', function () { return view('ExampleComponent'); });
Route::get('/indexing', function () { return view('ExampleComponent'); });
Route::get('/content', function () { return view('ExampleComponent'); });
Route::get('/announcement', function () { return view('ExampleComponent'); });
Route::get('/contact', function () { return view('ExampleComponent'); });
Route::get('/oldcontent', function () { return view('ExampleComponent'); });
Route::get('/editorBoard', function () { return view('ExampleComponent'); });
Route::get('/admin', function () { return view('ExampleComponent'); });
Route::get('/articles', function () { return view('ExampleComponent'); });
Route::get('/engdashboard', function () { return view('ExampleComponent'); });
Route::get('/aboutUsEng', function () { return view('ExampleComponent'); });
Route::get('/sunissionEng', function () { return view('ExampleComponent'); });
Route::get('/indexingEng', function () { return view('ExampleComponent'); });
Route::get('/contactEng', function () { return view('ExampleComponent'); });
Route::get('/contentEng', function () { return view('ExampleComponent'); });
Route::get('/oldContentEng', function () { return view('ExampleComponent'); });
Route::get('/announcementEng', function () { return view('ExampleComponent'); });
Route::get('/editorBoardEng', function () { return view('ExampleComponent'); });
Route::get('/login', function () { return view('ExampleComponent'); });

//Default login and registration path hide.
//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
