<?php

use App\Http\Controllers\LogicController;
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

Route::get('index', [LogicController::class, 'index'])->name('index');
Route::get('comment', [LogicController::class, 'comment'])->name('comment');
Route::Post('post', [LogicController::class, 'post'])->name('post');

Route::get('/', function () {
    return view('index');
});
