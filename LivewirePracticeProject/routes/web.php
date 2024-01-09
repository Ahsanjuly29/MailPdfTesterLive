<?php

use App\Http\Controllers\PracticeControler;
use App\Http\Controllers\TodoController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customers', [PracticeControler::class, 'index']);

Route::get('/todolist', [TodoController::class, 'todolist']);

