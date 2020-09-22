<?php

namespace App\Http\Controllers;

use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Resources\RestaurantResource;
use App\Http\Resources\RestaurantCollection;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return RestaurantCollection::collection(Restaurant::get());
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();

        $this->validate($request, [
            "name" => "required",
            "delivery_number" => "required",
            "delivery_time" => "required",
            "min_price_order" => "required",
            "about_delivery" => "required",
            "delivery_price" => "required",
            "restaurant_location" => "required"
        ]);
        
        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->delivery_number = $request->delivery_number;
        $restaurant->delivery_time = $request->delivery_time;
        $restaurant->min_price_order = $request->min_price_order;
        $restaurant->about_delivery = $request->about_delivery;
        $restaurant->delivery_price = $request->delivery_price;
        $restaurant->restaurant_location = $request->restaurant_location;
        $restaurant->save();

        return response([
            "data" => new RestaurantResource($restaurant)
        ], 201);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant)
    {
        //return $restaurant;
        return new RestaurantResource($restaurant);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Restaurant  $restaurant
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Restaurant $restaurant)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant)
    {
        //return $request->all();

        $this->validate($request, [
            "name" => "required",
            "delivery_number" => "required",
            "delivery_time" => "required",
            "min_price_order" => "required",
            "about_delivery" => "required",
            "delivery_price" => "required",
            "restaurant_location" => "required"
        ]);

        $restaurant->name = $request->name;
        $restaurant->delivery_number = $request->delivery_number;
        $restaurant->delivery_time = $request->delivery_time;
        $restaurant->min_price_order = $request->min_price_order;
        $restaurant->about_delivery = $request->about_delivery;
        $restaurant->delivery_price = $request->delivery_price;
        $restaurant->restaurant_location = $request->restaurant_location;
        $restaurant->save();

        return response([
            "data" => new RestaurantResource($restaurant)
        ], 205);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Restaurant  $restaurant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant)
    {
        $restaurant->delete();

        return response(null, 204);
    }
}
