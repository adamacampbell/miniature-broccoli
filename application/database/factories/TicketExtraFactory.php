<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\TicketExtraType;
use App\Models\TicketType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TicketExtra>
 */
class TicketExtraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /** @var Ticket $ticket */
        $ticket = Ticket::query()
            ->inRandomOrder()
            ->first();
        $ticketId = $ticket->id;

        /** @var TicketExtraType $ticketExtraType */
        $ticketExtraType = TicketExtraType::query()
            ->inRandomOrder()
            ->first();
        $ticketExtraTypeId = $ticketExtraType->id;

        return [
            'ticket_id' => $ticketId,
            'ticket_extra_type_id' => $ticketExtraTypeId
        ];
    }
}
