<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "user_id" => $this->user_id,
            "sub_insurance_id" => $this->sub_insurance_id,
            "car_id" => $this->car_id,
            "driver_id" => $this->driver_id,
            "company_id" => $this->company_id,
            'insurance_date_start' => $this->insurance_date_start,
            'insurance_date_end' => $this->insurance_date_end,
            'payment_id' => $this->payment_id,
            'coupon_id' => $this->coupon_id,
            'status' => $this->status,
        ];
    }
}
