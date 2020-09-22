<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    
    protected $fillable = [
        "restaurant_id",
        "sandwich",
        "burger",
        "salad",
        "price"
    ];

    public function restaurant() {

        return $this->belongsTo("App\Restaurant");
    }
}
