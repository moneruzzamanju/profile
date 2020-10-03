<?php

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
    return view('backend.blank_page');
});
Route::get('/form', function () {
    return view('backend.form');
});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('aboutme',\App\Http\Controllers\AboutMeController::class);
Route::resource('experience',\App\Http\Controllers\ExperienceController::class);
Route::resource('education',\App\Http\Controllers\EducationController::class);
Route::resource('skills',\App\Http\Controllers\SkillsController::class);
Route::resource('portfolio',\App\Http\Controllers\PortfolioController::class);
Route::resource('recommendation',\App\Http\Controllers\RecommendationController::class);
Route::resource('blog',\App\Http\Controllers\BlogController::class);
Route::resource('contact',\App\Http\Controllers\ContactController::class);
