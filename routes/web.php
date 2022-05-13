<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\json_controller;
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


Route::POST('/json', [json_controller::class, 'checkJson_GET']);


Route::GET('/json', [json_controller::class, 'checkJson_GET']);
