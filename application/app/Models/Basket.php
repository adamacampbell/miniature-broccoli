<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $gross_total
 * @property int $discount_total
 * @property int $net_total
 */
class Basket extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'gross_total',
        'discount_total',
        'net_total',
    ];

    /*
     * RELATIONSHIPS
     */
    public function tickets(): Collection
    {
        return $this->hasMany(Ticket::class)
            ->get();
    }

    /*
     * FUNCTIONS
     */
    public function calculateBasket()
    {
        $grossTotal = 0;

        $tickets = $this->tickets();

        /** @var Ticket $ticket */
        foreach ($tickets as $ticket) {
            $grossTotal += $ticket->ticketType()->price;
            $extras = $ticket->ticketExtras();

            /** @var TicketExtra $extra */
            foreach ($extras as $extra) {
                $grossTotal += $extra->ticketExtraType()->price;
            }
        }

        $this->gross_total = $grossTotal;

        $this->applyDiscounts(
            $tickets->count(),
        );

        $this->net_total = $grossTotal - $this->discount_total;

        $this->save();

        return $this;
    }

    public function applyDiscounts(
        int $ticketsCount
    ) {
        $discountTotal = 0;
        /** @var TicketType $concessionTicket */
        $concessionTicket = TicketType::query()
            ->find(TicketType::CONCESSION);

        // HANDLE THREE FOR THURSDAY
        $test = 1;
        if (Carbon::now()->dayOfWeek() === 1 && $ticketsCount > 2) {
            for ($i = 0; $i < $ticketsCount; $i += 3) {
                $discountTotal += ($concessionTicket->price * 2);
            }
        }

        $this->discount_total = $discountTotal;
        $this->save();
    }
}
