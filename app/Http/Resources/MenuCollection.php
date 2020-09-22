<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class MenuCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "menu_identified_number" => $this->id,
            "restaurant_name" => $this->restaurant->name,
            "sandwich" => $this->sandwich,
            "burger" => $this->burger,
            "salad" => $this->salad,
            "price" => $this->price
        ];
    }
}
