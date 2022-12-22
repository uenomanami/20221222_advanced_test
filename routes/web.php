<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|j
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ContactController::class, 'index']);
Route::post('/check', [ContactController::class, 'check']);
Route::post('/create', [ContactController::class, 'create']);
Route::get('/contact/find', [ContactController::class, 'find'])->name('contact.find');;
Route::get('/contact/search', [ContactController::class, 'search']);
Route::post('/contact/delete', [ContactController::class, 'delete'])->name('contact.delete');



// Route::get('/', function () {
//     return view('welcome');
// });
