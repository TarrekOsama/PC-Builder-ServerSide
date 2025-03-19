<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Admin::create(['name' => 'Super Admin', 'email' => 'superadmin@example.com', 'password' => bcrypt('admin123'), 'role' => 'super_admin']);
        Admin::create(['name' => 'Admin One', 'email' => 'admin1@example.com', 'password' => bcrypt('admin123'), 'role' => 'admin']);
        Admin::create(['name' => 'Admin Two', 'email' => 'admin2@example.com', 'password' => bcrypt('admin123'), 'role' => 'admin']);
        Admin::create(['name' => 'Admin Three', 'email' => 'admin3@example.com', 'password' => bcrypt('admin123'), 'role' => 'admin']);
        Admin::create(['name' => 'Admin Four', 'email' => 'admin4@example.com', 'password' => bcrypt('admin123'), 'role' => 'admin']);
    }
}
