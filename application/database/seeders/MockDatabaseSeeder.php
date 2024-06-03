<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\Mock\BasketSeeder;
use Database\Seeders\Mock\TicketSeeder;
use Illuminate\Database\Seeder;

class MockDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database with mock data.
     */
    public function run(): void
    {
        $this->call(BasketSeeder::class);
    }
}
