<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\Backend\BlogController;



//frontend route..............
Route::get('/', [HomeController::class,"index"])->name('home');
Route::get('about', [AboutController::class,"index"])->name('about');
Route::get('contact', [ContactController::class,"index"])->name('contact');


//backend route...............
Route::get('admin/dashboard',[DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('admin/category/create',[CategoryController::class, 'create'])->name('admin.category.create');
Route::POST('admin/category/store',[CategoryController::class, 'store'])->name('admin.category.store');
Route::get('admin/manage/category',[CategoryController::class, 'index'])->name('manage.category');
Route::get('delete-category/{id}', [CategoryController::class,'destroy'])->name('destroy');
Route::get('edit-category/{id}', [CategoryController::class,'edit'])->name('edit');
Route::POST('update-category/{id}', [CategoryController::class,'update'])->name('update');

Route::resource('blogs', BlogController::class);


