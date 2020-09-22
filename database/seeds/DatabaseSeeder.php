<?php

use Illuminate\Database\Seeder;
use App\Restaurant;
use App\Menu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Restaurant::class, 20)->create();
        factory(Menu::class, 200)->create();
    }
}
