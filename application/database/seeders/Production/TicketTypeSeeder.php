<?php

namespace Database\Seeders\Production;

use App\Models\TicketType;
use Illuminate\Database\Seeder;

class TicketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketType::query()->create([
            'name' => 'Standard',
            'price' => 7.90
        ]);
        TicketType::query()->create([
            'name' => 'Concession',
            'price' => 5.40
        ]);
    }
}
