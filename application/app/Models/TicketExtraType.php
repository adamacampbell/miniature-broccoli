<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property string $name
 * @property int $price
 */
class TicketExtraType extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price'
    ];

    public const REAL3D = 1;
    public const IMAX = 2;

    /*
     * RELATIONSHIPS
     */
    public function ticketExtras(): Collection
    {
        return $this->hasMany(TicketExtra::class)
            ->get();
    }
}
