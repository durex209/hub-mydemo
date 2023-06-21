<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\UsersController;
use Inertia\Inertia;

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

Route::get('/', [Controller::class, 'index']);
Route::get('/users', [UsersController::class, 'index']);
Route::get('/settings', [SettingsController::class, 'index']);
Route::post('/logout', [Controller::class, 'logout']);

// Route::get('/', function () {
//     return Inertia::render('Welcome' ,[
//         'name' => 'mikoy'
//     ]);
// });
