<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Restaurant;
use Illuminate\Http\Request;
use App\Http\Resources\MenuCollection;
use App\Http\Resources\MenuResource;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Restaurant $restaurant)
    {
        
        return MenuCollection::collection($restaurant->menus);
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
    public function store(Request $request, Restaurant $restaurant)
    {
        //return $request->all();
        
        $this->validate($request, [
            "sandwich" => "required",
            "burger" => "required",
            "salad" => "required",
            "price" => "required"
        ]);

        $menu = new Menu($request->all());
        //return $menu;
        $restaurant->menus()->save($menu);

        return response([
            "data" => new MenuResource($menu)
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Restaurant $restaurant, Menu $menu)
    {
        return new MenuResource($menu);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Menu  $menu
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Menu $menu)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Restaurant $restaurant, Menu $menu)
    {
        // return $request->all();
        
        $this->validate($request, [
            "sandwich" => "required",
            "burger" => "required",
            "salad" => "required",
            "price" => "required"
        ]);

        $menu->update($request->all());
        //return $menu;
        $restaurant->menus()->save($menu);

        return response([
            "data" => new MenuResource($menu)
        ], 205);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Restaurant $restaurant, Menu $menu)
    {
        $menu->delete();

        return response(null, 204);
    }
}
