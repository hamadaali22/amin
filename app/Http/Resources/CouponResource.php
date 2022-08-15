<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CouponResource extends JsonResource
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
            "coupon_name" => $this->coupon_name,
            "coupon_code" => $this->coupon_code,
            "usage_limit" => $this->usage_limit,
            "percentage_discount" => $this->percentage_discount,
            "active_from" => $this->active_from,
            'active_to' => $this->active_to,

        ];
    }
}
