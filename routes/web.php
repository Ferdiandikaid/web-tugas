<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\LoginController;
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

Route::get('/welcome', function () {
    // echo "Welcome";
    return view('welcome');
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('/profile/{username}',[MainController::class,'profile']);
});

Route::group(['middleware' => 'auth', 'prefix' => 'settings'], function() {
    Route::get('/profile', function() {
        echo 'opened profile setting';
    });

    Route::get('/language', function() {
        echo 'opened language setting';
    });

    Route::get('/integration', function() {
        echo 'Opened Integration Setting';
    });
});


Route::get('/login', function(){
    return view('login');
})->name ('login');

Route::post('/authenticate',[LoginController::class,'authenticate']);

Route::get('/registration',[LoginController::class,'registration']);

Route::get('/logout',[LoginController::class,'logout']);

Route::get('/homepage',[MainController::class,'homePage']);






