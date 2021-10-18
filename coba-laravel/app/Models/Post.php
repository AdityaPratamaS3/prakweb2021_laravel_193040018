<?php

namespace App\Models;


class Post
{
    private static $blog_posts =  [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aditya pratama s",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem tempore possimus tempora eligendi magnam dignissimos ad sequi optio accusamus ratione animi excepturi dolorum sit nisi sint itaque adipisci illo, blanditiis esse deserunt. Soluta a incidunt cumque odit accusamus eos labore ullam! Totam laudantium, distinctio aperiam fugiat tempore iste molestiae quia exercitationem a asperiores vel magnam consectetur cum tenetur sit? Facilis fugit necessitatibus blanditiis maiores molestiae ipsam dolorem iusto soluta. Recusandae in modi provident aliquid numquam sequi iusto. Ut earum magni, quaerat similique saepe culpa dolore consequatur cupiditate non, quos dignissimos quod consequuntur! Quasi minus voluptatum assumenda autem amet tempora necessitatibus laudantium eius aut sed recusandae voluptatibus veniam, dignissimos rerum, quidem voluptas pariatur non! Voluptas sed doloribus libero, atque soluta debitis magnam dolores quos laudantium culpa quo optio maxime aliquid at excepturi totam quibusdam molestiae quisquam facilis quam vitae, recusandae doloremque. Saepe libero nobis ut voluptates dolores, laudantium sed natus? Odit rem ea aliquid dignissimos architecto illo tempore illum sunt dolor necessitatibus non adipisci qui voluptatem, ratione repellendus dicta pariatur distinctio dolorum a officiis blanditiis aperiam natus iure! Autem, rerum! Minus distinctio sunt eligendi velit cum. Reiciendis at amet quo culpa quod unde exercitationem beatae quibusdam blanditiis distinctio, impedit, nemo iure."
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Suherlan pratama",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem tempore possimus tempora eligendi magnam dignissimos ad sequi optio accusamus ratione animi excepturi dolorum sit nisi sint itaque adipisci illo, blanditiis esse deserunt. Soluta a incidunt cumque odit accusamus eos labore ullam! Totam laudantium, distinctio aperiam fugiat tempore iste molestiae quia exercitationem a asperiores vel magnam consectetur cum tenetur sit? Facilis fugit necessitatibus blanditiis maiores molestiae ipsam dolorem iusto soluta. Recusandae in modi provident aliquid numquam sequi iusto. Ut earum magni, quaerat similique saepe culpa dolore consequatur cupiditate non, quos dignissimos quod consequuntur! Quasi minus voluptatum assumenda autem amet tempora necessitatibus laudantium eius aut sed recusandae voluptatibus veniam, dignissimos rerum, quidem voluptas pariatur non! Voluptas sed doloribus libero, atque soluta debitis magnam dolores quos laudantium culpa quo optio maxime aliquid at excepturi totam quibusdam molestiae quisquam facilis quam vitae, recusandae doloremque. Saepe libero nobis ut voluptates dolores, laudantium sed natus? Odit rem ea aliquid dignissimos architecto illo tempore illum sunt dolor necessitatibus non adipisci qui voluptatem, ratione repellendus dicta pariatur distinctio dolorum a officiis blanditiis aperiam natus iure! Autem, rerum! Minus distinctio sunt eligendi velit cum. Reiciendis at amet quo culpa quod unde exercitationem beatae quibusdam blanditiis distinctio, impedit, nemo iure."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function flind($slug)
    {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
