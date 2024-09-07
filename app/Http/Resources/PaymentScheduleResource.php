<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PaymentScheduleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
        'datetime_created' => $this->datetime_created,
        'customer_id' => $this->customer_id,
        'loan_released_id' => $this->loan_released_id,
        'datetime_due' => $this->datetime_due,
        'amount_due' => $this->amount_due,
        'amount_interest' => $this->amount_interest,
        'amount_paid' => $this->amount_paid,
        'payment_status_code' => $this->payment_status_code,
        'remarks' => $this->remarks,
        ];
    }
}
