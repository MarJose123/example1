<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        AdminUser::factory()->create([
            'email' => 'admin@mail.com',
            'password' => \Hash::make('password')
        ]);
    }
}
