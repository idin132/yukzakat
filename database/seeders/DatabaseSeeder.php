<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory()->create();

        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'password' => bcrypt('admin'),
        ]);
    }
}
