<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
//     return view('welcome');
// });

Auth::routes();

//Prak 1.1 (home)
Route::get('/home', [App\Http\Controllers\PageController::class, 'home']);


//Prak 1.2 (product)
Route::prefix('product')->group (function(){
    Route::get('/', [App\Http\Controllers\PageController::class, 'product']);
});


//Prak 1.3 (News)
Route::get('/news/{param?}', [App\Http\Controllers\PageController::class, 'news']);


//Prak 1.4 (Program)
Route::prefix('program')->group (function(){
    Route::get('/', [App\Http\Controllers\PageController::class, 'program']);
});

//Prak 1.5 (About-Us)
Route::get('/about-us', [App\Http\Controllers\PageController::class, 'about']);

//Prak 1.6 (Contact-Us)
Route::resource('contact-us', App\Http\Controllers\PageController::class)->only(['index']);