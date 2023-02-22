<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

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

//1. Halaman Home
Route::get('/', [HomeController::class, 'home']);

//2. Halaman Produk
Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'eduGames']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'marbelFriends']);
    Route::get('/riri-story-books', [ProductController::class, 'ririStory']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakKids']);
});

//3. Halaman News
Route::get('/news/{berita?}', [NewsController::class,'news']);

//4. Halaman Program
Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});

//5. Halaman About Us!
Route::get('/about-us', [AboutController::class, 'aboutUs']);

//6. Halaman Contact Us!
Route::resource('/contact-us', ContactController::class, ['only'=> ['index', 'create', 'store']]); 



