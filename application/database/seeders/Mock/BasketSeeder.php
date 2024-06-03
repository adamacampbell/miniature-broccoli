<?php

namespace Database\Seeders\Mock;

use App\Models\Basket;
use App\Models\Ticket;
use App\Models\TicketExtra;
use Illuminate\Database\Seeder;

class BasketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Basket::factory(10)->create()->each(function (Basket $basket) {

            Ticket::factory(rand(1, 10))->create([
                'basket_id' => $basket->id
            ])->each(function (Ticket $ticket) {

                // GENERATE EXTRAS
                TicketExtra::factory(rand(0,2))->create([
                    'ticket_id' => $ticket->id
                ]);

            });

        });
    }
}
