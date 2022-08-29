<?php

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

Route::get('/', function(){

    $post=Post::with('category','user')->get();
    return view('Posts',[
        'posts'=>$post
    ]);
});

Route::get('category/{category:slug}',function (category $category){

    return view('Posts',[
       'posts'=>$category->posts
       ]);
});
Route::get('user/{user}',function (User $user){
   return view('Posts',[
       'posts'=>$user->Post
   ]) ;
});
Route::get('/Post/{post}', function(Post $post){
        return view('Post',[
            'File_Contines'=>$post
        ]);
});
//})->where('slug','[A-z_\-]+');



Route::get('/Add',function (){
    Post::create([
        'title'=>'My html Post',
        'body'=>'If the application is in maintenance  demo mode via the "down" command
               | we will load this file so that any pre-rendered content can be shown
               | instead of starting the framework, which could cause an exception.',
        'excerpt'=>'If the application is in maintenance  demo',
        'category_id'=>1,
        'slug'=>'My-Html-s-Post'
    ]);
    return 'Success To Add Object';
});
