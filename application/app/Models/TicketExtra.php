<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class TicketExtra extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'ticket_id',
        'ticket_extra_type_id',
    ];

    /*
     * RELATIONSHIPS
     */
    public function ticket(): Ticket
    {
        /** @var Ticket */
        return $this->belongsTo(Ticket::class)
            ->first();
    }

    public function ticketExtraType(): TicketExtraType
    {
        /** @var TicketExtraType */
        return $this->belongsTo(TicketExtraType::class)
            ->first();
    }
}
