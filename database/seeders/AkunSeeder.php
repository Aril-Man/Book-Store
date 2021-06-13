<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
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
                'username' => 'admin',
                'level' => 'admin',
               'password'=> bcrypt('admin123'),
            ],
            [
                'username' => 'kasir',
                'level' => 'kasir',
               'password'=> bcrypt('kasir123'),
            ],
            [
                'username' => 'manager',
                'level' => 'manager',
               'password'=> bcrypt('manager123'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
