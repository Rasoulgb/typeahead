<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeaheadController;
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
Route::get('/create', 'App\Http\Controllers\LoanController@create')->name('loan.create');

//Route::get('/home', [TypeaheadController::class, 'index']);
Route::get('/autocomplete-search', [TypeaheadController::class, 'autocompleteSearch']);