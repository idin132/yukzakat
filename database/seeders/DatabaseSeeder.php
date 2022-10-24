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
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'no_hp' => '081111111',
            'alamat' => 'Alamat Admin',
            'username' => 'admin',
            'password' => bcrypt('admin'),
            'role' => 'admin',
        ]);
    }
}
