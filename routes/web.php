<?php
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
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
Route::namespace('Auth')->group(function(){
    Route::get('/login',[LoginController::class,'show_login_form'])->name('login');
    Route::post('/login',[LoginController::class,'show_login_form'])->name('login');
    Route::get('/register',[LoginController::class,'show_signup_form'])->name('register');
    Route::post('/register', [LoginController::class,'process_signup']);
    Route::post('/logout',[LoginController::class,'logout'])->name('logout');

});
Route::get('/home',function(){
    return view('home');
});
Route::get('/', function () {
    return view('home');
});
Route::get('/search/', [PostController::class,'search'])->name('search');
Route::resources(['posts'=>PostController::class,]);
