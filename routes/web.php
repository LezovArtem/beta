<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace' => 'App\Http\Controllers\Main'], function (){
   Route::get('/', 'IndexController')->name('mainpage');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Main', 'prefix' => 'admin', 'middleware' => ['auth', 'admin', 'verified']], function (){
    Route::get('/', 'IndexController')->name('admin.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Personal', 'prefix' => 'personal', 'middleware' => ['auth', 'verified']], function (){
    Route::get('/', 'IndexController')->name('personal.index');
});

Route::group(['namespace' => 'App\Http\Controllers\Personal\Liked', 'prefix' => 'personal', 'middleware' => ['auth', 'verified']], function (){
    Route::get('/liked', 'IndexController')->name('personal.liked');
    Route::delete('/liked/{post}', 'DeleteController')->name('personal.liked.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Personal\Commented', 'prefix' => 'personal', 'middleware' => ['auth', 'verified']], function (){
    Route::get('/commented', 'IndexController')->name('personal.commented');
    Route::get('/commented/{comment}/edit', 'EditController')->name('personal.commented.edit');
    Route::patch('/commented/{comment}', 'UpdateController')->name('personal.commented.update');
    Route::delete('/commented/{comment}', 'DeleteController')->name('personal.commented.delete');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Post', 'prefix' => 'admin/posts', 'middleware' => ['auth', 'admin', 'verified']], function (){
    Route::get('/', 'IndexController')->name('admin.posts.index');
    Route::get('/create', 'ReturnCreateViewController')->name('admin.posts.create');
    Route::post('/', 'StoreController')->name('admin.posts.store');
    Route::get('/{post}', 'ShowController')->name('admin.posts.show');
    Route::get('/{post}/edit', 'ReturnEditViewController')->name('admin.posts.edit');
    Route::patch('/{post}', 'UpdateController')->name('admin.posts.update');
    Route::delete('/{post}', 'DeleteController')->name('admin.posts.delete');
    Route::get('/{post}/restore', 'RestoreController')->name('admin.posts.restore');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Category', 'prefix' => 'admin/categories', 'middleware' => ['auth', 'admin', 'verified']], function (){
    Route::get('/', 'IndexController')->name('admin.categories.index');
    Route::get('/create', 'ReturnCreateViewController')->name('admin.categories.create');
    Route::post('/', 'StoreController')->name('admin.categories.store');
    Route::get('/{category}', 'ShowController')->name('admin.categories.show');
    Route::get('/{category}/edit', 'ReturnEditViewController')->name('admin.categories.edit');
    Route::patch('/{category}', 'UpdateController')->name('admin.categories.update');
    Route::delete('/{category}', 'DeleteController')->name('admin.categories.delete');
    Route::get('/{category}/restore', 'RestoreController')->name('admin.categories.restore');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\Tag', 'prefix' => 'admin/tags', 'middleware' => ['auth', 'admin', 'verified']], function (){
    Route::get('/', 'IndexController')->name('admin.tags.index');
    Route::get('/create', 'ReturnCreateViewController')->name('admin.tags.create');
    Route::post('/', 'StoreController')->name('admin.tags.store');
    Route::get('/{tag}', 'ShowController')->name('admin.tags.show');
    Route::get('/{tag}/edit', 'ReturnEditViewController')->name('admin.tags.edit');
    Route::patch('/{tag}', 'UpdateController')->name('admin.tags.update');
    Route::delete('/{tag}', 'DeleteController')->name('admin.tags.delete');
    Route::get('/{tag}/restore', 'RestoreController')->name('admin.tags.restore');
});

Route::group(['namespace' => 'App\Http\Controllers\Admin\User', 'prefix' => 'admin/users', ], function (){
    Route::get('/', 'IndexController')->name('admin.users.index');
    Route::get('/create', 'ReturnCreateViewController')->name('admin.users.create');
    Route::post('/', 'StoreController')->name('admin.users.store');
    Route::get('/{user}', 'ShowController')->name('admin.users.show');
    Route::get('/{user}/edit', 'ReturnEditViewController')->name('admin.users.edit');
    Route::patch('/{user}', 'UpdateController')->name('admin.users.update');
    Route::delete('/{user}', 'DeleteController')->name('admin.users.delete');
    Route::get('/{user}/restore', 'RestoreController')->name('admin.users.restore');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth', 'verified'])->name('home');


