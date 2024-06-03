<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $base_price
 * @property integer $discount
 */
class BaseTicketModel extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'base_price',
        'discount',
    ];
}
