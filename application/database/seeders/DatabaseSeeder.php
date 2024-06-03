<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\App;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /** PRODUCTION DATA */
        $this->call(ProductionDatabaseSeeder::class);

        /** MOCK DATA */
        if (App::environment() !== 'production') {
            $this->call(MockDatabaseSeeder::class);
        }
    }
}
