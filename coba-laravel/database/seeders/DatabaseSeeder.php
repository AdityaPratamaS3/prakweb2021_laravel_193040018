<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // User::create([
        //     'name' => 'Aditya Pratama s',
        //     'email' => 'Adityaps@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'suherlan Pratama s',
        //     'email' => 'Adityaps@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'APS',
            'slug' => 'APS'
        ]);
        Category::create([
            'name' => 'web Design',
            'slug' => 'web-Design'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul pertama',
        //     'slug'  => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        //     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        //     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        //     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        //     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        //     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        //     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        //     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        //     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        //     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        //     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        //     'category_id' => 1,
        //     'use_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug'  => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        //     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        //     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        //     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        //     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        //     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        //     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        //     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        //     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        //     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        //     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        //     'category_id' => 1,
        //     'use_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug'  => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        //     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        //     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        //     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        //     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        //     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        //     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        //     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        //     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        //     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        //     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        //     'category_id' => 2,
        //     'use_id' => 1

        // ]);
        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug'  => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        //     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        //     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        //     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        //     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        //     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        //     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        //     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        //     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        //     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        //     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
        //     'category_id' => 2,
        //     'use_id' => 2

        // ]);
    }
}
