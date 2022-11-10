<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DBController;


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



Route::get('/todoapp', function () {
    return view('todoapp/index');
});



Route::get('/todoapp/create', [DBController::class, 'create']);

Route::post('/todoapp/create', [DBController::class, 'add']);





