<?php

namespace Database\Factories;

use App\Models\Basket;
use App\Models\TicketType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        /** @var TicketType $ticketType */
        $ticketType = TicketType::query()
            ->inRandomOrder()
            ->first();
        $ticketTypeId = $ticketType->id;

        /** @var Basket $basket */
        $basket = Basket::query()
            ->inRandomOrder()
            ->first();
        $basketId = $basket->id;

        return [
            'ticket_type_id' => $ticketTypeId,
            'basket_id' => $basketId,
        ];
    }

    /**
     * Ensures the ticket is of a standard type
     * @return Factory
     */
    public function standardTicket(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'ticket_type_id' => TicketType::STANDARD
            ];
        });
    }

    /**
     * Ensures the ticket is of a concession type
     * @return Factory
     */
    public function concessionTicket(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'ticket_type_id' => TicketType::CONCESSION
            ];
        });
    }
}
