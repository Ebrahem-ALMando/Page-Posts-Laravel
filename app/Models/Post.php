<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;


class Post
{
    public  $title;
    public  $slug;
    public  $date;
    public  $img;
    public $excert;
    public  $body;

    public  function __construct($title,$body,$date,$excert
    ,$img,$slug)
    {
        $this->title=$title;
        $this->date=$date;
        $this->slug=$slug;
        $this->excert=$excert;
        $this->img=$img;
        $this->body=$body;
    }
    public static function all()
    {   $files= File::files(resource_path("Posts_Group/"));
        return cache()->remember('Storeg.Post',20,function () use($files){
            return collect($files)
                ->map(function ($file){
                    return YamlFrontMatter::parseFile($file);
                })->map(function ($documnt){
                    return new  Post(
                        $documnt->title,
                        $documnt->body(),
                        $documnt->date,
                        $documnt->excert,
                        $documnt->img,
                        $documnt->slug
                    );
                })->sortBy('date');
        });

//    $files= File::files(resource_path("Posts_Group/"));
//    $post_n=array_map(function ($file){
//        $documnt=YamlFrontMatter::parseFile($file);
//        return new  Post(
//            $documnt->title,
//            $documnt->body(),
//            $documnt->date,
//            $documnt->excert,
//            $documnt->image,
//            $documnt->slug
//
//        );
//    }
//        ,$files);
//       $files= File::files(resource_path("Posts_Group/"));
//       return array_map(function ($file){
//           return $file->getContents();
//       },$files);
    }


    public static function find($slug)
    {
//        $posts=static::all();
//        return $posts->firstWhere('slug',$slug);
         return static::all()->firstWhere('slug',$slug);

//        if (!file_exists($path = resource_path("Posts_Group/{$slug}.html"))) {
////        abort(404);
////    return  redirect("/");
//            throw  new ModelNotFoundException();
////    throw  new Exception();
//        } else {
////      $post = cache()->remember("Posts_Group.{$slug}",5,
////            function () use ($path) {
////            echo('file_get_contions is used');
////            return file_get_contents($path);
////        });
//            return cache()->remember("Posts_Group.{$slug}", 10,
//                fn() => file_get_contents($path));
//        }
    }
    public static function findOrFail($slug){
     $post=static::find($slug);
    if(!$post){
       throw new ModelNotFoundException();
         }
       else{
    return $post;
       }
        }

}
