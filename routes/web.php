<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'MainController@home')
    ->name('home');


Route::get('/o-nas', 'MainController@about')
    ->name('about');


Route::get('/kontakt', 'MainController@contact')
    ->name('contact');

Route::post('/kontakt', 'MessageController@sendMessage')
    ->name('send.message');

Route::get('/wiadomosci', 'MessageController@index')
    ->name('messages');

Route::delete('wiadomosc/{message}', 'MessageController@deleteMessage')
    ->name('delete.message');

Route::get('/admin-login', 'MainController@admin')
    ->name('admin.login');

// Kategorie
Route::group([], function() {
    Route::get('/edytuj-kategorie/{id}', 'CategoryController@edit')
        ->name('edit.category');

    Route::patch('/kategoria/{id}', 'CategoryController@update')
        ->name('update.category');

    Route::delete('/kategoria/{id}', 'CategoryController@destroy')
        ->name('destroy.category');

    Route::get('/dodaj-kategorie', 'CategoryController@create')
        ->name('create.category');

    Route::post('/kategorie', 'CategoryController@store')
        ->name('store.category');
});

// Zabiegi
Route::group([], function() {
    Route::get('/zabiegi/{id?}', 'OvertureController@index')
        ->name('overtures');

    Route::get('/edytuj-zabieg/{id}', 'OvertureController@edit')
        ->name('edit.overture');

    Route::patch('/zabieg/{id}', 'OvertureController@update')
        ->name('update.overture');

    Route::delete('/zabieg/{id}', 'OvertureController@destroy')
        ->name('destroy.overture');

    Route::get('/dodaj-zabieg', 'OvertureController@create')
        ->name('create.overture');

    Route::post('/zabiegi', 'OvertureController@store')
        ->name('store.overture');
});

// Pracownicy
Route::group([], function() {
    Route::get('/pracownicy', 'EmployeeController@index')
        ->name('employees');

    Route::get('/pracownik/{id}', 'EmployeeController@get')
        ->name('employee');

    Route::get('/edytuj-pracownika/{id}', 'EmployeeController@edit')
        ->name('edit.employee');

    Route::patch('/pracownik/{id}', 'EmployeeController@update')
        ->name('update.employee');

    Route::delete('/pracownik/{id}', 'EmployeeController@destroy')
        ->name('destroy.employee');

    Route::get('/dodaj-pracownika', 'EmployeeController@create')
        ->name('create.employee');

    Route::post('/pracownicy', 'EmployeeController@store')
        ->name('store.employee');
});


Auth::routes();

