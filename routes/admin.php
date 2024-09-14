<?php

use Illuminate\Support\Facades\Route;

Route::get('/' ,[\App\Http\Controllers\admin\AdminController::class , 'dashboard'])->name('dashboard') ;


Route::resource('/users' , \App\Http\Controllers\admin\UserController::class) ;

Route::resource('/categories' , \App\Http\Controllers\admin\CategoryController::class) ;


Route::resource('/items' , \App\Http\Controllers\admin\ItemsController::class) ;
