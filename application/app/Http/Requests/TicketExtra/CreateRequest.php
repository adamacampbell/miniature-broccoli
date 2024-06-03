<?php

namespace App\Http\Requests\TicketExtra;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'ticket_id' => [
                'required',
                'exists:tickets,id'
            ],
            'ticket_extra_type_id' => [
                'required',
                'exists:ticket_extra_types,id'
            ],
        ];
    }
}
