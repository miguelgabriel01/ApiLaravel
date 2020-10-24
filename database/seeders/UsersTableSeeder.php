<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            0 => [
                'name' => 'Miguel Gabriel B. Dos Santos',
                'email' => 'gabrielogabriel10@gmail.com',
                'password' => bcrypt('miguel123'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            1 => [
                'name' => 'Gabriel Barbosa D. Santos',
                'email' => 'gabriel@gmail.com',
                'password' => bcrypt('miguel123'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            2 => [
                'name' => 'Miguel B. Dos Santos',
                'email' => 'miguel@gmail.com',
                'password' => bcrypt('miguel123'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            3 => [
                'name' => 'João Gabriel  Dos Santos',
                'email' => 'joaogabriel@gmail.com',
                'password' => bcrypt('miguel123'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            4 => [
                'name' => 'Miguel Israel B. Dos Santos',
                'email' => 'miguelisrael@gmail.com',
                'password' => bcrypt('miguel123'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            5 => [
                'name' => 'Ryan Hudson Dos Santos',
                'email' => 'hudson@gmail.com',
                'password' => bcrypt('miguel123'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],


        ];

        User::insert($users);
    }
}
