<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post
{
    public static function find($slug)
    {
        base_path();
        if (!file_exists($path = resource_path("posts/{$slug}.html"))) {
            // if no post for slug
            throw new ModelNotFoundException();
        }

        return cache()->remember("posts.($slug}", 60, fn() => file_get_contents($path));

    }
}
