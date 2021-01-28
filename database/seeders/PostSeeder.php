<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list_post = [
            [
                'title' => 'ABC',
                'cate_id' => 1,
                'content' => 'ABCDEZZ',
                'image' => '',
                'short_desc' => 'AAA',
                'author' => 'Quannv'
            ],
            [
                'title' => 'EFIJ',
                'cate_id' => 2,
                'content' => 'EJFDEZZ',
                'image' => '',
                'short_desc' => 'BBB',
                'author' => 'Ducnp'
            ],
            [
                'title' => 'GHJK',
                'cate_id' => 3,
                'content' => 'GHJKEZZ',
                'image' => '',
                'short_desc' => 'CCC',
                'author' => 'Namqc'
            ]
        ];

        foreach ($list_post as $item) {
            Post::create($item);
        }
    }
}
