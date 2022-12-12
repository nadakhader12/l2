<?php

use Illuminate\Support\Facades\Route;
Route::prefix('admin/')->name('admin.')->group(function(){

    Route::get('admin/dashboard',function(){
        return 'admin dashboard';
    })->name('dashboard');
    Route::get('user',function(){
        return 'admin user';
    })->name('user');
    Route::get('post',function(){
        return 'admin post';
    })->name('post');
    Route::get('comments',function(){
        return 'admin comments';
    })->name('comments');
    Route::get('product',function(){
        return 'admin product';
    })->name('product');
    Route::get('categories',function(){
        return 'admin categories';
    })->name('categories');
    Route::get('statistics',function(){
        return 'admin statistics';
    })->name('statistics');
    Route::get('orders',function(){
        return 'admin orders';
    })->name('orders');
    });

