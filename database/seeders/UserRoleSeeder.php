<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRole::insert([
            ['name' => 'user'],
            ['name' => 'admin'],
            ['name' => 'banned'],
        ]);
    }
}
