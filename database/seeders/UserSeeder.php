<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_list = [
            [
                'name' => 'administrator',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123456')
            ],
            [
                'name' => 'member',
                'email' => 'quannv1320@gmail.com',
                'password' => Hash::make('123456')
            ]
        ];

        foreach($user_list as $item){
            $model = new User();
            $model->fill($item);
            $model->save();
        }
    }
}
