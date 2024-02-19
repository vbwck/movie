<?php
namespace App\Http\Controllers;

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


Route::get('/',[SortMovieController::class, 'random'
]);
Route::get('/faq', function () {
    return view('faq');
});



Route::get('/article', [SortMovieController::class, 'article'
]);

Route::post('/article', [SortMovieController::class, 'article'])->name('article');




Route::get('/search',[SortMovieController::class, 'allMovies'
]);
Route::post('/search',[SortMovieController::class, 'allMovies'
]);

