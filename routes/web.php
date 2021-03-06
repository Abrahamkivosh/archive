<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/photos',[App\Http\Controllers\PageController::class, 'photos'])->name('photos');
// Route::get('/documents',[App\Http\Controllers\PageController::class, 'documents'])->name('documents');
// Route::get('/events',[App\Http\Controllers\PageController::class, 'events'])->name('events');
// Route::get('/notes',[App\Http\Controllers\PageController::class, 'notes'])->name('notes');
// Route::get('/music',[App\Http\Controllers\PageController::class, 'music'])->name('music');
Route::resource('categories', CategoryController::class)->except("index") ;
Route::get("groups/{categoryId}",[GroupController::class,'index'])->name("groups.index");
Route::post("groups/{categoryId}",[GroupController::class,'store'])->name("groups.store");
Route::get('/items/{groupId}',[GroupController::class, 'show'])->name('groups.show');
Route::post('/items',[ItemController::class, 'store'])->name('items.store');

Route::get('/videos',[App\Http\Controllers\PageController::class, 'videos'])->name('videos');
