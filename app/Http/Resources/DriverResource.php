<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DriverResource extends JsonResource
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
            "identification_number" => $this->identification_number,
            "birthdate" => $this->birthdate,
            "name" => $this->name,
            "email" => $this->email,
            "phone" => $this->phone,
            'driving_percentage' => $this->driving_percentage,

        ];
    }
}
