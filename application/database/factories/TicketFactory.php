<?php

namespace Database\Factories;

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

        $discount = 0;

        // WE DON'T WANT ALL TO BE DISCOUNTED, WE WILL GO WITH 1/3
        $shouldDiscount = rand(1, 3);
        if ($shouldDiscount > 2) {
            $discount = $this->faker->randomDigit();
        }

        return [
            'ticket_type_id' => $ticketTypeId,
            'discount' => $discount,
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

    /**
     * Ensures the ticket is discounted
     * @return Factory
     */
    public function discounted(): Factory
    {
        return $this->state(function (array $attributes) {
            $discount = $this->faker->randomDigit();

            return [
                'discount' => $discount
            ];
        });
    }
}
