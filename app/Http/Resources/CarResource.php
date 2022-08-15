<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CarResource extends JsonResource
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
            "car_brand" => $this->car_brand,
            "car_model" => $this->car_model,
            "car_id" => $this->car_id,
            "car_plate" => $this->car_plate,
            "production_year" => $this->production_year,
            'use_purpose' => $this->use_purpose,
            'car_owner' => $this->car_owner,
        ];
    }
}
