<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\GenerationController;
use App\Http\Controllers\MusicController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ChartController;
use App\Http\Controllers\AffiliationController;
use App\Http\Controllers\MusicBlogController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('admin')->group(function () {
Route::resource('/members',MembersController::class);
Route::resource('/generation',GenerationController::class);
Route::resource('/music',MusicController::class);
Route::resource('/user',ProfileController::class);
Route::resource('/affiliation',AffiliationController::class);
Route::resource('/adminhome',AdminHomeController::class);
Route::resource('/profilehome',UserController::class);

Route::get('chart',[ChartController::class,'index']);
    

});
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

Route::get('/blogmusic',[MusicBlogController::class,'index']);
Route::get('/views',[BlogController::class,'index']);
Route::get('/detail/{ch}',[BlogController::class,'detail']);



