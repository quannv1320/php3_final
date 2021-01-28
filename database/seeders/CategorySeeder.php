<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cate_list = [
            [
                'name' => 'travel news',
                'logo' => 'images/categories/travel.jpg'
            ],
            [
                'name' => 'today news',
                'logo' => 'images/categories/today.jpg'
            ],
            [
                'name' => 'sport news',
                'logo' => 'images/categories/sport.jpg'
            ],
            [
                'name' => 'world news',
                'logo' => 'images/categories/world.jpg'
            ],
            [
                'name' => 'business news',
                'logo' => 'images/categories/business.jpg'
            ],
        ];

        foreach ($cate_list as $item) {
            Category::create($item);
            // $model = new Category();
            // $model->fill($item);
            // $model->save();
        }
    }
}
