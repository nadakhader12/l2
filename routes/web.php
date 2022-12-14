<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\site2controller;
use App\Http\Controllers\site3controller;

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


//site 2
Route::prefix('site2')->name('site2.')->group(function(){
Route::get('/',[site2controller::class,'index'])->name('index');
Route::get('about',[site2controller::class,'about'])->name('about');
Route::get('contact',[site2controller::class,'contact'])->name('contact');
Route::get('post',[site2controller::class,'post'])->name('post');
});
//site3
Route::prefix('site3')->name('site3.')->group(function(){
   Route::get('/',[site3controller::class,'index'])->name('index');
   Route::get('/index2',[site3controller::class,'index2'])->name('index2');
   Route::get('testimonials',[site3controller::class,'testimonials'])->name('testimonials');
   Route::get('faq',[site3controller::class,'faq'])->name('faq');
   Route::get('pricing',[site3controller::class,'pricing'])->name('pricing');
   Route::get('team',[site3controller::class,'team'])->name('team');
   Route::get('about',[site3controller::class,'about'])->name('about');
   Route::get('projects',[site3controller::class,'projects'])->name('projects');
   Route::get('projects_single',[site3controller::class,'projects_single'])->name('projects_single');
   Route::get('services',[site3controller::class,'services'])->name('services');
   Route::get('service_single',[site3controller::class,'service_single'])->name('service_single');
   Route::get('news_single',[site3controller::class,'news_single'])->name('news_single');
   Route::get('news_left_sidebar',[site3controller::class,'news_left_sidebar'])->name('news_left_sidebar');
   Route::get('news_right_sidebar',[site3controller::class,'news_right_sidebar'])->name('news_right_sidebar');
   Route::get('contact',[site3controller::class,'contact'])->name('contact');
   Route::get('typography',[site3controller::class,'typography'])->name('typography');
   Route::get('error',[site3controller::class,'error'])->name('error');
   });
