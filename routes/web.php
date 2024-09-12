<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [UserController::class, 'showRegistrationForm']);
Route::post('/register', [UserController::class, 'register']);
Route::get('/page/{link}', [UserController::class, 'showPage']);
Route::post('/page/{link}/generate-link', [UserController::class, 'generateNewLink']);
Route::post('/page/{link}/deactivate', [UserController::class, 'deactivateLink']);
Route::post('/page/{link}/feeling-lucky', [UserController::class, 'feelingLucky']);
Route::get('/page/{link}/history', [UserController::class, 'history']);
