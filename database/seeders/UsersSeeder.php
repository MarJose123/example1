<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'email' => 'admin@mail.com',
            'password' => \Hash::make('password')
        ]);
    }
}
