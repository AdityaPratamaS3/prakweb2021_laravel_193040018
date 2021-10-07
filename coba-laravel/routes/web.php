<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Aditya pratama Suherlan",
        "email" => "Adityaps@gmail.com",
        "image" => "adityaps.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aditya pratama s",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem tempore possimus tempora eligendi magnam dignissimos ad sequi optio accusamus ratione animi excepturi dolorum sit nisi sint itaque adipisci illo, blanditiis esse deserunt. Soluta a incidunt cumque odit accusamus eos labore ullam! Totam laudantium, distinctio aperiam fugiat tempore iste molestiae quia exercitationem a asperiores vel magnam consectetur cum tenetur sit? Facilis fugit necessitatibus blanditiis maiores molestiae ipsam dolorem iusto soluta. Recusandae in modi provident aliquid numquam sequi iusto. Ut earum magni, quaerat similique saepe culpa dolore consequatur cupiditate non, quos dignissimos quod consequuntur! Quasi minus voluptatum assumenda autem amet tempora necessitatibus laudantium eius aut sed recusandae voluptatibus veniam, dignissimos rerum, quidem voluptas pariatur non! Voluptas sed doloribus libero, atque soluta debitis magnam dolores quos laudantium culpa quo optio maxime aliquid at excepturi totam quibusdam molestiae quisquam facilis quam vitae, recusandae doloremque. Saepe libero nobis ut voluptates dolores, laudantium sed natus? Odit rem ea aliquid dignissimos architecto illo tempore illum sunt dolor necessitatibus non adipisci qui voluptatem, ratione repellendus dicta pariatur distinctio dolorum a officiis blanditiis aperiam natus iure! Autem, rerum! Minus distinctio sunt eligendi velit cum. Reiciendis at amet quo culpa quod unde exercitationem beatae quibusdam blanditiis distinctio, impedit, nemo iure."
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Suherlan pratama",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem tempore possimus tempora eligendi magnam dignissimos ad sequi optio accusamus ratione animi excepturi dolorum sit nisi sint itaque adipisci illo, blanditiis esse deserunt. Soluta a incidunt cumque odit accusamus eos labore ullam! Totam laudantium, distinctio aperiam fugiat tempore iste molestiae quia exercitationem a asperiores vel magnam consectetur cum tenetur sit? Facilis fugit necessitatibus blanditiis maiores molestiae ipsam dolorem iusto soluta. Recusandae in modi provident aliquid numquam sequi iusto. Ut earum magni, quaerat similique saepe culpa dolore consequatur cupiditate non, quos dignissimos quod consequuntur! Quasi minus voluptatum assumenda autem amet tempora necessitatibus laudantium eius aut sed recusandae voluptatibus veniam, dignissimos rerum, quidem voluptas pariatur non! Voluptas sed doloribus libero, atque soluta debitis magnam dolores quos laudantium culpa quo optio maxime aliquid at excepturi totam quibusdam molestiae quisquam facilis quam vitae, recusandae doloremque. Saepe libero nobis ut voluptates dolores, laudantium sed natus? Odit rem ea aliquid dignissimos architecto illo tempore illum sunt dolor necessitatibus non adipisci qui voluptatem, ratione repellendus dicta pariatur distinctio dolorum a officiis blanditiis aperiam natus iure! Autem, rerum! Minus distinctio sunt eligendi velit cum. Reiciendis at amet quo culpa quod unde exercitationem beatae quibusdam blanditiis distinctio, impedit, nemo iure."
        ],
    ];

    return view('posts', [
        "title" => "posts",
        "posts" => $blog_posts
    ]);
});



Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Aditya pratama s",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem tempore possimus tempora eligendi magnam dignissimos ad sequi optio accusamus ratione animi excepturi dolorum sit nisi sint itaque adipisci illo, blanditiis esse deserunt. Soluta a incidunt cumque odit accusamus eos labore ullam! Totam laudantium, distinctio aperiam fugiat tempore iste molestiae quia exercitationem a asperiores vel magnam consectetur cum tenetur sit? Facilis fugit necessitatibus blanditiis maiores molestiae ipsam dolorem iusto soluta. Recusandae in modi provident aliquid numquam sequi iusto. Ut earum magni, quaerat similique saepe culpa dolore consequatur cupiditate non, quos dignissimos quod consequuntur! Quasi minus voluptatum assumenda autem amet tempora necessitatibus laudantium eius aut sed recusandae voluptatibus veniam, dignissimos rerum, quidem voluptas pariatur non! Voluptas sed doloribus libero, atque soluta debitis magnam dolores quos laudantium culpa quo optio maxime aliquid at excepturi totam quibusdam molestiae quisquam facilis quam vitae, recusandae doloremque. Saepe libero nobis ut voluptates dolores, laudantium sed natus? Odit rem ea aliquid dignissimos architecto illo tempore illum sunt dolor necessitatibus non adipisci qui voluptatem, ratione repellendus dicta pariatur distinctio dolorum a officiis blanditiis aperiam natus iure! Autem, rerum! Minus distinctio sunt eligendi velit cum. Reiciendis at amet quo culpa quod unde exercitationem beatae quibusdam blanditiis distinctio, impedit, nemo iure."
        ],
        [
            "title" => "judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Suherlan pratama",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem tempore possimus tempora eligendi magnam dignissimos ad sequi optio accusamus ratione animi excepturi dolorum sit nisi sint itaque adipisci illo, blanditiis esse deserunt. Soluta a incidunt cumque odit accusamus eos labore ullam! Totam laudantium, distinctio aperiam fugiat tempore iste molestiae quia exercitationem a asperiores vel magnam consectetur cum tenetur sit? Facilis fugit necessitatibus blanditiis maiores molestiae ipsam dolorem iusto soluta. Recusandae in modi provident aliquid numquam sequi iusto. Ut earum magni, quaerat similique saepe culpa dolore consequatur cupiditate non, quos dignissimos quod consequuntur! Quasi minus voluptatum assumenda autem amet tempora necessitatibus laudantium eius aut sed recusandae voluptatibus veniam, dignissimos rerum, quidem voluptas pariatur non! Voluptas sed doloribus libero, atque soluta debitis magnam dolores quos laudantium culpa quo optio maxime aliquid at excepturi totam quibusdam molestiae quisquam facilis quam vitae, recusandae doloremque. Saepe libero nobis ut voluptates dolores, laudantium sed natus? Odit rem ea aliquid dignissimos architecto illo tempore illum sunt dolor necessitatibus non adipisci qui voluptatem, ratione repellendus dicta pariatur distinctio dolorum a officiis blanditiis aperiam natus iure! Autem, rerum! Minus distinctio sunt eligendi velit cum. Reiciendis at amet quo culpa quod unde exercitationem beatae quibusdam blanditiis distinctio, impedit, nemo iure."
        ],
    ];
    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "single post",
        "post" => $new_post
    ]);
});
