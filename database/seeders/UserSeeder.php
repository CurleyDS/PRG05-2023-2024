<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        User::insert([
            [
                'name' => 'Dylan',
                'email' => 'dylantester@gmail.com',
                'password' => Hash::make('tester8'),
            ],
            [
                'name' => 'Curley',
                'email' => 'dylantester2@gmail.com',
                'password' => Hash::make('tester8'),
            ],
            [
                'name' => 'Pureojuice',
                'email' => 'testeracc3@gmail.com',
                'password' => Hash::make('tester8'),
            ],
            [
                'name' => 'Derivakat',
                'email' => 'testeracc4@gmail.com',
                'password' => Hash::make('tester8'),
            ],
            [
                'name' => 'Suzume',
                'email' => 'testeracc5@gmail.com',
                'password' => Hash::make('tester8'),
            ],
            [
                'name' => 'Garnt',
                'email' => 'testeracc6@gmail.com',
                'password' => Hash::make('tester8'),
            ],
        ]);
    }
}
