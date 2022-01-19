<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users =  [
            [
                'id' => 5,
                'username' => 'mrx112233',
                'email' => 'mrx@gmail.com',
                'password' => Hash::make('mrx123'),
                'level_id' => 2,
            ],
            [
                'id' => 6,
                'username' => 'administrator',
                'email' => 'admin2@gmail.com',
                'password' => Hash::make('admin123'),
                'level_id' => 1,
            ],
        ];

        User::insert($users);
    }
}
