<?php

use App\Http\Controllers\LayoutController;
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

Route::get('/admin/calendar', [LayoutController::class, 'calendar']);
Route::get('/admin/form', [LayoutController::class, 'form']);
Route::get('/admin/index', [LayoutController::class, 'index']);
Route::get('/admin/ui', [LayoutController::class, 'ui']);
Route::get('/admin/list', [LayoutController::class,'list']);
