<?php

use App\Http\Controllers\DonateController;
use App\Http\Controllers\FamilyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PluginController;
use App\Http\Controllers\PostController;
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

Route::get('/', [PageController::class, 'main'])->name('main');
Route::get('/blog', [PostController::class, 'index'])->name('blog');
Route::get('/blog/subscribe', [PostController::class, 'subscribe'])->name('subscribe');
Route::get('/post/{post}', [PostController::class, 'show'])->name('post');
Route::get('/products', [PluginController::class, 'index'])->name('products');
Route::get('/families', [FamilyController::class, 'index'])->name('families');
Route::post('/donate', [DonateController::class, 'index'])->name('donate');
