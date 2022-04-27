<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;

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
// ***************************** ADMIN CATEGORY ROUTES **************************************
Route::get('/admin/category',[AdminCategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create',[AdminCategoryController::class,'create'])->name('admin_category_create');
Route::post('/admin/category/store',[AdminCategoryController::class,'store'])->name('admin_category_store');
Route::get('/admin/category/edit/{id}',[AdminCategoryController::class,'edit'])->name('admin_category_edit');
Route::post('/admin/category/update/{id}',[AdminCategoryController::class,'update'])->name('admin_category_update');



