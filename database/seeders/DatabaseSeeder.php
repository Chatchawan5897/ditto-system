<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;


    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            MenuSeeder::class,
            PositionsSeeder::class,
            DepartmentsSeeder::class,
            AssetSeeder::class,
            MdItemTypeSeeder::class,
            MdItemSubTypeSeeder::class,
            MdAssetTypeSeeder::class,
            MdWarrantyTypeSeeder::class,
            AssetRunningNumberSeeder::class,
            MdStatusesSeeder::class,

        ]);
    }
}
