<?php

// use index;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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

Route::middleware(['splade'])->group(function () {
    // Route::get('/', fn () => view('home'))->name('home');
    Route::get('/', fn () => view('front.index'))->name('home');
    Route::get('/resume', fn () => view('front.resume'))->name('resume');
    Route::get('/contact', fn () => view('front.contact'))->name('contact');
    Route::get('/projects', fn () => view('front.projects'))->name('projects');
    Route::get('/privacy', fn () => view('front.privacy'))->name('privacy');


    Route::get('/docs', fn () => view('docs'))->name('docs');
    Route::get('/hello', fn () => view('hello'))->name('hello');

    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();



    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('posts', PostController::class);

});
