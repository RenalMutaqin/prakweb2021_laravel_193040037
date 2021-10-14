<?php

namespace App\Models;


class post
{
 private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama" ,
        "author" => "Renal Mutaqin",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Voluptatum distinctio aperiam unde! Dolorem tempore ea natus, possimus beatae facere corporis 
        saepe quo quaerat earum, eligendi consectetur iusto asperiores voluptas incidunt!"
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua" ,
        "author" => "Renal Mutaqin",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Voluptatum distinctio aperiam unde! Dolorem tempore ea natus, possimus beatae facere
        corporis saepe quo quaerat earum, eligendi consectetur iusto asperiores voluptas incidunt!"
    ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p)
        // {
        //     if($post["slug"]===$slug){
        //         $post = $p;
        //     }
        // }
        return $posts->firstWhere('slug', $slug);
    }

}
