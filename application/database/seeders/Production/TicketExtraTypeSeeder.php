<?php

namespace Database\Seeders\Production;

use App\Models\TicketExtraType;
use Illuminate\Database\Seeder;

class TicketExtraTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketExtraType::query()->create([
            'name' => 'Real3d',
            'price' => 0.90
        ]);
        TicketExtraType::query()->create([
            'name' => 'IMAX',
            'price' => 1.50
        ]);
    }
}
