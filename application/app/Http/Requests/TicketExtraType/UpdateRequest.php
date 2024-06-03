<?php

namespace App\Http\Requests\TicketExtraType;

use App\Models\TicketExtraType;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

/**
 * @property TicketExtraType $ticketExtraType
 */
class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                Rule::unique('ticket_extra_types')->ignoreModel($this->ticketExtraType)
            ],
            'price' => [
                'numeric'
            ]
        ];
    }
}
