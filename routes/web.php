<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassesController;
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

//Laravel 8 routes
Route::get('/classes', [ClassesController::class, 'index']);
//Route::get('/classes', 'App\Http\Controllers\ClassesController@index');

//Pre Laravel 8 routes
//Route::get('/classes', 'ClassesController@index');

/*
Route::get('/classes', function() {
    return ['A+', 'A', 'B', 'C', 'D'];
});

Route::get('/classes', function() {
    return response()->json([
        "Name" => "Abdelhameed Ayad",
        "Company" => "EraCore.NET"
    ]);
});
*/