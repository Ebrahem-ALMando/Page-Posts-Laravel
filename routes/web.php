<?php
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
//Route::get('/', function(){
//$Post=Post::all();
////dd($Post[0]->getContents());
//    return view('Posts',[
//        'posts'=>$Post
//    ]);
//});
Route::get('/', function(){

    $post=Post::all();
    return view('Posts',[
        'posts'=>$post
    ]);
});


Route::get('/Posts_Group/{slug}', function($slug){
$post=Post::findOrFail($slug);
        return view('Post',[
            'File_Contines'=>$post
        ]);
});
//})->where('slug','[A-z_\-]+');
