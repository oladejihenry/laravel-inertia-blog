<?php

use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return inertia('Welcome');
// });

Route::get('/', [DashboardController::class, 'index']);

Route::get('/posts', [DashboardController::class, 'posts']);





Route::get('/users', [DashboardController::class, 'users']);

Route::get('/settings', [DashboardController::class, 'settings']);
