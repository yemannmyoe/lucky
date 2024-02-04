<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TemplateController::class, 'index']);

Route::get('services', [TemplateController::class, 'services'])->name('services');

Route::get('customer', [TemplateController::class, 'customer'])->name('customer');

Route::get('news', [TemplateController::class, 'news'])->name('news');

Route::get('about', [TemplateController::class, 'about'])->name('about');

Route::get('contact', [TemplateController::class, 'contact'])->name('contact');

Route::get('terms', [TemplateController::class, 'terms'])->name('terms');

Route::get('inquiry', [TemplateController::class, 'inquiry'])->name('inquiry');



Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => '\App\Http\Controllers\LanguageController@switchLang']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/languageDemo', 'App\Http\Controllers\HomeController@languageDemo');
