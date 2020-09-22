<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{

    protected $fillable = [
        "name",
        "delivery_number",
        "delivery_time",
        "min_price_order",
        "about_delivery",
        "delivery_price",
        "restaurant_location"
    ];
    
    public function menus() {
        
        return $this->hasMany("App\Menu");
    }
}
