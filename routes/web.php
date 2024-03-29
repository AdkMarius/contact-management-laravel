<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\IndexController::class, 'index'])->name('index');

Route::prefix('/contact')->name('contact.')->controller(ContactController::class)->group(function () {

    Route::get('/add', 'show')->name('show');

    Route::post('/add', 'create');

    Route::get('/list', 'list')->name('list');

    Route::post('/list', 'search')->name('search');

    Route::get('/view/{id}', 'read')->name('view');

    Route::get('update/{id}', 'edit')->name('update');

    Route::patch('update/{id}', 'update');

    Route::get('/delete/{id}', 'delete')->name('delete');

});
