<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        User::create(['name' => 'John Doe', 'email' => 'john@example.com', 'password' => bcrypt('password123')]);
        User::create(['name' => 'Jane Smith', 'email' => 'jane@example.com', 'password' => bcrypt('password123')]);
        User::create(['name' => 'Mike Johnson', 'email' => 'mike@example.com', 'password' => bcrypt('password123')]);
        User::create(['name' => 'Emily Davis', 'email' => 'emily@example.com', 'password' => bcrypt('password123')]);
        User::create(['name' => 'Alex Brown', 'email' => 'alex@example.com', 'password' => bcrypt('password123')]);
    }
}
