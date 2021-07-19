<?php

use App\Travel;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 15; $i++) {
            $travel = new Travel();
            $travel->image_path = $faker->imageUrl(540, 480, 'Travels', true, 'City_Travel', true);
            $travel->city = $faker->city();
            $travel->description = $faker->paragraph();
            $travel->departure = $faker->dateTimeBetween('+0 week', '+1 week');
            $travel->arrival = $faker->dateTimeBetween('+1 week', '+10 week');
            $travel->price = $faker->numberBetween(1000, 4500);
            $travel->save();
        }
    }
}
