<?php

namespace Database\Seeders\Mock;

use App\Models\Ticket;
use App\Models\TicketExtra;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ticket::factory(100)->create()->each(function (Ticket $ticket) {
            // GENERATE EXTRAS
            TicketExtra::factory(rand(0,2))->create([
                'ticket_id' => $ticket->id
            ]);
        });
    }
}
