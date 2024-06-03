<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property int $ticket_type_id
 * @property int $basket_id
 */
class Ticket extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'ticket_type_id',
        'basket_id',
    ];

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
