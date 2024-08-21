<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Country;
use Faker\Generator as Faker;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for($i=0; $i < 115; $i++){
            $newCountry = new Country();
            $newCountry -> name = $faker->country();
            $newCountry -> number_of_participants = $faker->numberBetween(1,20);
            $newCountry -> flag_img = $faker->imageUrl();
            $newCountry -> save();
        }

    }
}
