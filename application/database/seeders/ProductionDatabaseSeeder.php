<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Production\TicketExtraTypeSeeder;
use Database\Seeders\Production\TicketTypeSeeder;
use Illuminate\Database\Seeder;

class ProductionDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database with production data.
     */
    public function run(): void
    {
        /** PRODUCTION DATA */
        $this->call(TicketTypeSeeder::class);
        $this->call(TicketExtraTypeSeeder::class);
    }
}
