<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ira Nuryani",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptate est iure, sequi accusamus ipsum aliquid nisi quam repudiandae asperiores sed expedita tempore cum exercitationem eum alias officiis adipisci consequatur dolores similique a voluptatum architecto maxime. Non cumque, aut, minima dicta eligendi quas debitis placeat numquam nam odit id provident dolore qui doloribus quis sapiente ex nisi voluptatum quia ipsam fugit molestiae repellat. 
            Fuga beatae voluptates nobis! Voluptatem qui earum eligendi repudiandae consequatur unde, dicta a, odit ea officia culpa! Harum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Lee Chan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo modi debitis ab, placeat porro perspiciatis nostrum, asperiores dolorem dolores eius, doloribus hic similique officiis reiciendis fugiat sunt possimus veritatis adipisci? Quae repellendus, cum officia ipsa similique molestiae tenetur eaque eos nisi ut! Laborum adipisci perferendis quam non nesciunt alias ducimus officiis, eveniet consequuntur repellendus amet asperiores, reprehenderit soluta odit facere ex optio. Laborum aspernatur, excepturi dolore qui harum impedit. 
            Odit officiis sit cupiditate modi dolorem iste, pariatur necessitatibus ab unde, obcaecati ut nostrum sed sunt assumenda ducimus nesciunt dolorum repudiandae quisquam rem molestias minima eveniet. Quas quis eum atque commodi?."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = self::all();
        return $posts->firstWhere('slug', $slug);
    }
}
