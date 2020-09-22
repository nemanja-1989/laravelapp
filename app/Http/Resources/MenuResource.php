<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MenuResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
            "restaurant_name" => $this->restaurant->name,
            "sandwich" => $this->sandwich,
            "burger" => $this->burger,
            "salad" => $this->salad,
            "price" => $this->price
        ];
    }
}
