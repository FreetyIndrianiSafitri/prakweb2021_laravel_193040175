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
        //     'name' => 'Freety Indriani Safitri',
        //     'email' => 'freety@mail.unpas.ac.id',
        //     'password' => bcrypt('193040175')
        // ]);

        // User::create([
        //     'name' => 'Fety',
        //     'email' => 'fety@mail.unpas.ac.id',
        //     'password' => bcrypt('193040175')
        // ]);


        User::factory(3)->create();


        Category::create([
            'name' => 'Web Programing',
            'slug' => 'web-programing'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
            
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur animi eos provident aperiam veniam harum explicabo numquam alias assumenda, atque necessitatibus modi, reiciendis sit delectus magni, aut iusto? Ea ratione vero officia deserunt? Modi ipsam a, perferendis cumque autem placeat sint, repellat debitis non quidem quibusdam iste mollitia deserunt laboriosam aperiam nihil pariatur provident! Rerum vitae culpa placeat ducimus eos officiis ut. Rem qui autem unde nulla natus suscipit illo? Asperiores ab nostrum exercitationem assumenda eius repellendus magni cum aliquam sint accusamus qui explicabo iure neque reiciendis autem aperiam quasi, incidunt dolorem eum amet unde laborum vero! Consequuntur, expedita atque.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur animi eos provident aperiam veniam harum explicabo numquam alias assumenda, atque necessitatibus modi, reiciendis sit delectus magni, aut iusto? Ea ratione vero officia deserunt? Modi ipsam a, perferendis cumque autem placeat sint, repellat debitis non quidem quibusdam iste mollitia deserunt laboriosam aperiam nihil pariatur provident! Rerum vitae culpa placeat ducimus eos officiis ut. Rem qui autem unde nulla natus suscipit illo? Asperiores ab nostrum exercitationem assumenda eius repellendus magni cum aliquam sint accusamus qui explicabo iure neque reiciendis autem aperiam quasi, incidunt dolorem eum amet unde laborum vero! Consequuntur, expedita atque.',
        //     'category_id' => 1,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur animi eos provident aperiam veniam harum explicabo numquam alias assumenda, atque necessitatibus modi, reiciendis sit delectus magni, aut iusto? Ea ratione vero officia deserunt? Modi ipsam a, perferendis cumque autem placeat sint, repellat debitis non quidem quibusdam iste mollitia deserunt laboriosam aperiam nihil pariatur provident! Rerum vitae culpa placeat ducimus eos officiis ut. Rem qui autem unde nulla natus suscipit illo? Asperiores ab nostrum exercitationem assumenda eius repellendus magni cum aliquam sint accusamus qui explicabo iure neque reiciendis autem aperiam quasi, incidunt dolorem eum amet unde laborum vero! Consequuntur, expedita atque.',
        //     'category_id' => 2,
        //     'user_id' => 1

        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur animi eos provident aperiam veniam harum explicabo numquam alias assumenda, atque necessitatibus modi, reiciendis sit delectus magni, aut iusto? Ea ratione vero officia deserunt? Modi ipsam a, perferendis cumque autem placeat sint, repellat debitis non quidem quibusdam iste mollitia deserunt laboriosam aperiam nihil pariatur provident! Rerum vitae culpa placeat ducimus eos officiis ut. Rem qui autem unde nulla natus suscipit illo? Asperiores ab nostrum exercitationem assumenda eius repellendus magni cum aliquam sint accusamus qui explicabo iure neque reiciendis autem aperiam quasi, incidunt dolorem eum amet unde laborum vero! Consequuntur, expedita atque.',
        //     'category_id' => 2,
        //     'user_id' => 2

        // ]);
    }
}

