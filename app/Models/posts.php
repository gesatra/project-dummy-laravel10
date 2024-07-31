<?php

namespace App\Models;



class posts
{
   private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" => "judul-post-pertama",
        "author" => "gestian",
        "content" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                    Sapiente cum qui excepturi, saepe quasi delectus aliquid iusto minus placeat quia dolor, 
                    tempora blanditiis quisquam veniam nihil! Quasi fugit dignissimos iste."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug" => "judul-post-kedua",
        "author" => "rifky",
        "content" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Sapiente cum qui excepturi, saepe quasi delectus aliquid iusto minus placeat quia dolor, 
                tempora blanditiis quisquam veniam nihil! Quasi fugit dignissimos iste."
    ]
    ];

public static function all()
    {
    return self::$blog_posts;
    }

public static function find($slug) {
    $posts = self::$blog_posts;
    $post = [];
    foreach($posts as $p){
        if($p["slug"] === $slug) {
        $post = $p;
        }
    }
    return $post;
}
}

