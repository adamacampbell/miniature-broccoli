<?php

namespace App\Interfaces;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Http\FormRequest;

interface TicketInterface
{
    public function calculateGrossPrice(): int;
    public function calculateSavings(): int;
    public function calculateNetPrice(): int;
}
