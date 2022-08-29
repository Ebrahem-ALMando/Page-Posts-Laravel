<?php

use App\Http\Controllers\categorycontroller;
use App\Http\Controllers\Postcontroller;
use App\Http\Controllers\Userscontroller;
use App\Models\category;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers;
use \App\Models\Post;
use Spatie\YamlFrontMatter\YamlFrontMatter;
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
Route::get('/',[Postcontroller::class,'index']);
//Group Post ==================>>>>>>>>>

Route::resource('/Posts',Postcontroller::class)->only(
    'show','create','edit','update','destroy','store');
//Single Post ==================>>>>>>>>>

Route::get('/Post/{post}', [Postcontroller::class,'show']);

Route::get('category',[categorycontroller::class,'index']);
Route::resource('/Category',categorycontroller::class);
Route::get('user/{user}',function (User $user){
   return view('Posts',[
       'posts'=>$user->Post
   ]) ;
});
//})->where('slug','[A-z_\-]+');

//Route::get('users',[Userscontroller::class,'index']);
