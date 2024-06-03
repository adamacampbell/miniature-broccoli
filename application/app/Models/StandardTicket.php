<?php

namespace App\Models;

use App\Interfaces\TicketInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property string $name
 */
class StandardTicket extends BaseTicketModel implements TicketInterface
{
    use HasFactory;

    protected $fillable = [
        'name'
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
}
