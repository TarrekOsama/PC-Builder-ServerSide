<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersTableSeeder::class,
            AdminsTableSeeder::class,
            ChipsetsTableSeeder::class,
            CpusTableSeeder::class,
            MotherboardsTableSeeder::class,
            CpuChipsetCompatibilityTableSeeder::class,
            RamsTableSeeder::class,
            GpusTableSeeder::class,
            StoragesTableSeeder::class,
            MonitorsTableSeeder::class,
            Pc_casesTableSeeder::class,
            PsusTableSeeder::class,
            ProductsTableSeeder::class,
            BuildsTableSeeder::class,
            BuildComponentsTableSeeder::class,
            OrdersTableSeeder::class,
            OrderItemsTableSeeder::class,
            PaymentsTableSeeder::class,
            ReviewsTableSeeder::class,
            InventoryTableSeeder::class,
            WishlistsTableSeeder::class,
            NotificationsTableSeeder::class,
        ]);
    }
}
