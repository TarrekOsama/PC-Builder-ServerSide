<?php

namespace Database\Seeders;

use App\Models\admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        admin::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123'),

        ]);

        Admin::create([
            'name' => 'super admin',
            'email' => 'super@super.com',
            'password' => bcrypt('super123'),
            'role' => 'super_admin',
            
        ]);
    }
}
