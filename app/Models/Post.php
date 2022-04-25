<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post


{

    public $title;
    public $slug;
    public $excerpt;
    public $date;
    public $body;

    public function __construct($title,$excerpt,$date,$body,$slug)
    {
        $this->title = $title;
        $this->excerpt = $excerpt;
        $this->date = $date;
        $this->body = $body;
        $this->slug = $slug;
    }

    public static function find($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug',$slug);

    }

    public static function findOrFail($slug)
    {
        $post = static::find($slug);

        if (!$post){throw new ModelNotFoundException();}

        return $post;
    }

    public static function all()
    {

        return cache()->remember('posts.all',20,function () {
            return collect(File::files(resource_path("posts")))
                ->map(function ($file){
                    return YamlFrontMatter::parseFile($file);
                })
                ->map(function($document){
                    return new Post(
                        $document->title,
                        $document->excerpt,
                        $document->date,
                        $document->body(),
                        $document->slug
                    );
                })
                ->sortByDesc('date');

        });

        //    $posts = array_map(function ($file){
        //        $document = YamlFrontMatter::parseFile($file);
        //        return new Post(
        //            $document->title,
        //            $document->excerpt,
        //            $document->date,
        //            $document->body(),
        //            $document->slug
        //        );
        //    },$files);
        //    $posts = [];
        //    foreach ($files as $file) {
        //        $document = YamlFrontMatter::parseFile($file);
        //        $posts[] = new Post(
        //            $document->title,
        //            $document->excerpt,
        //            $document->date,
        //            $document->body(),
        //            $document->slug
        //        );
        //    }
        //    dd($posts);
        //
        //    $document = YamlFrontMatter::parseFile(
        //        resource_path('posts/my-fourth-post.html')
        //    );
        //
        //    dd($document->body());

    }
}
