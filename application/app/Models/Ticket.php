<?php

namespace App\Models;

use App\Interfaces\TicketInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property integer $base_price
 * @property integer $discount
 */
class Ticket extends BaseModel implements TicketInterface
{
    use HasFactory;

    protected $fillable = [
        'ticket_type_id',
        'discount',
    ];

    public function calculateGrossPrice(): int
    {
        // TODO: Implement calculateGrossPrice() method.
    }

    public function calculateSavings(): int
    {
        // TODO: Implement calculateSavings() method.
    }

    public function calculateNetPrice(): int
    {
        // TODO: Implement calculateNetPrice() method.
    }

    /*
     * RELATIONSHIPS
     */
    public function ticketType(): TicketType
    {
        /** @var TicketType */
        return $this->belongsTo(TicketType::class)
            ->first();
    }

    public function ticketExtras(): Collection
    {
        return $this->hasMany(TicketExtra::class)
            ->get();
    }
}
