<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CpuChipsetCompatibilityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cpu_chipset_compatibility')->insert([
            ['cpu_id' => 1, 'chipset_id' => 1], // i9-13900K with Z790
            ['cpu_id' => 1, 'chipset_id' => 5], // i9-13900K with Z690
            ['cpu_id' => 2, 'chipset_id' => 3], // Ryzen 9 7950X with X670
            ['cpu_id' => 3, 'chipset_id' => 2], // i5-13400 with B760
            ['cpu_id' => 4, 'chipset_id' => 4], // Ryzen 5 7600X with B650
        ]);
    }
}
