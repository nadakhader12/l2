<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\WebController;

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
//Route::get('/', function(){
 //   return 'home page';
//})->name();
//Route::get('about', function(){
   // return 'about page';
//})->name();
//Route::get('contact', function(){
   // return 'contact page';
//})->name();
//Route::get('servies', function(){
   // return 'servies page';
//})->name();
//Route::get('team', function(){
  //  return 'team page';
//})->name();
//Route::get('user/ahmed', function(){
  //  return 'welcome ahmed ';
//})->name();
//Route::get('user/{user}', function($name ){
   // return 'welcome .$name ';
//})->whereAlpha('name');
//Route::get('user/{name}/{age}/{user}', function($name,$age,$user ){
    //return 'welcome .$name .$age'.$user;
//})->whereAlpha('name')->whereNumber('age')->name('userinfo');

//Route::get('news', function( ){
   // return 'news ';
//})->name();
//Route::get('news/{id?}', function($id=null){
   // if($id){
   //     return 'news id ='.$id;
  //  }
 //   return 'news';
//})->name();
//Route::get('/', function(){
   // return url('contact us');
   //return route('contact us');
   //$name='nada';
   //$age=19;
  // $user='nadakhader';
  // return url('user/'.$name.'/'.$age.'/'.$user);
 //  return route('userinfo',[$name,$age,$user]);
//})->name();
//Route::get('contact_us', function(){
 //   return 'contact us';
// })->name('contactpage');



Route::get('/',[WebController::class,'index'])->name('web.index');
Route::get('/about',[WebController::class,'about'])->name('web.about');
Route::get('/contact',[WebController::class,'contact'])->name('web.contact');
Route::get('/team',[WebController::class,'team'])->name('web.team');
Route::get('/news/{id?}',[WebController::class,'news'])->name('web.news');
