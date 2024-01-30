<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'is_admin' => '1',
                'role_id' => '4',
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'User',
                'email' => 'normal@normal.com',
                'is_admin' => '0',
                'role_id' => '2',
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($user as $value) {
            User::create($value);
        }
    }
}
