<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

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
//     return view('index');
// });
// route::get('home', fn() => view('index'));
// Route::get('/home', fn() => view('home.index'));
// Route::get('/about', fn() => view('about.index'));
// Route::get('/portfolio', fn() => view('portfolio.index'));
// Route::get('/contact', fn() => view('contact.index'));

Route::get('/', fn() => view('home.index'));
Route::get('/home', fn() => view('home.index'));
Route::get('/about', fn() => view('about.index'));
Route::get('/portfolio', fn() => view('portfolio.index'));
Route::get('/contact', fn() => view('contact.index'));

Route::get('/dashboard', [PortfolioController::class, 'index'])->name('dashboard');
Route::resource('portfolios', \App\Http\Controllers\PortfolioController::class);
