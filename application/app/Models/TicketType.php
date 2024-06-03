<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property string $name
 * @property int $price
 */
class TicketType extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
    ];

    public const STANDARD = 1;
    public const CONCESSION = 2;

    /*
     * RELATIONSHIPS
     */
    public function tickets(): Collection
    {
        return $this->hasMany(Ticket::class)
            ->get();
    }
}
