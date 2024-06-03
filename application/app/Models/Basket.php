<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $gross_total
 * @property int $promotion_total
 * @property int $net_total
 */
class Basket extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'gross_total',
        'promotion_total',
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
        /** @var Ticket $ticket */
        foreach ($this->tickets() as $ticket) {
            $grossTotal += $ticket->base_price;
            $extras = $ticket->ticketExtras();

            /** @var TicketExtra $extra */
            foreach ($extras as $extra) {
                $grossTotal += $extra->ticketExtraType()->price;
            }
        }
        $this->gross_total = $grossTotal;
        $this->net_total = $grossTotal;

        $this->save();

        return $this;
    }
}
