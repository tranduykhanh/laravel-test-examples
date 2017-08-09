<?php

use App\City;
use App\Street;
use Illuminate\Database\Seeder;

class CitySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(City::class, 50)->create()->each(function (City $city) {
            $city->streets()->save(factory(Street::class)->make());
        });
    }
}
