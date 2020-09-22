<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RestaurantResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "restaurant_identifier_number" => $this->id,
            "restaurant_name" => $this->name,
            "delivery_number" => $this->delivery_number,
            "delivery_time_needed" => $this->delivery_time,
            "minimum_price_order" => $this->min_price_order,
            "restaurant_delivery_information" => $this->about_delivery,
            "delivery_price" => $this->delivery_price,
            "restaurant_location" => $this->restaurant_location,
            "href" => [
                "restaurant_menu" => route("menus.index", $this->id)
            ]
        ];
    }
}
