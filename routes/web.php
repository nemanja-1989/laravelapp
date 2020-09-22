<?php

use App\Restaurant;
use App\Menu;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get("/restaurant", function() {
//     // $res = Restaurant::get();
//     // dd($res);

//     // $res = Restaurant::whereId(2)->first();
//     // $resMenu = $res->menus;
//     // dd($resMenu);

//     $menu = Menu::whereId(2)->first();
//     $menu_res = $menu->restaurant;
//     dd($menu_res);
// });

Route::get("/restaurants", function() {

    return view("restaurants.restaurants");
});

Route::get("/find-restaurant", function() {

    return view("restaurants.find-restaurant");
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
