<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Test Comment
*/
//Do something in route
Route::get('/hello', function () {
    return 'Hello World';
});


// all view in route
Route::get('/welcome', function () {
    return view('welcome');
});


//all controller function
Route::get('/',[HomeController::class,'index'])->name('home');

//route->controller->view
Route::get('/test',[HomeController::class,'test'])->name('test');

//route with parameters
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');

//route with post
Route::post('/save',[HomeController::class,'save'])->name('save');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// ***************************** ADMIN PANEL ROUTES ****************************************
Route::get('/admin',[AdminHomeController::class,'index'])->name('admin');
