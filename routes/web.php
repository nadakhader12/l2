<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('url', 'action');
// Route::post('url', 'action');
//Route::put('url', 'action');
//Route::patch('url', 'action');
//Route::delete('url', 'action');
Route::get('/', function(){
    return 'homeee page';
});


