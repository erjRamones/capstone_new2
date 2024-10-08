<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PaymentLineUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'payment_id' => ['required', 'integer'],
            'payment_schedule_id' => ['required', 'integer'],
            'balance' => ['required', 'integer'],
            'amount_paid' => ['required', 'integer'],
            'remarks' => ['required', 'string'],
        ];
    }
}
